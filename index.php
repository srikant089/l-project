<h1>Setup Apache2 Virtual Hosting On Ubuntu</h1>

<h2>Step 1: Install Apache2</h2>
<p>The first step to get virtual hosting configured on Apache2 is to install Apache2. If you don’t have Apache2 installed, you’re not going anywhere. To install Apache2, run the commands below.<p>
	<p>	<span>sudo apt-get update</span>
		<span>sudo apt-get install apache2</span></p>
<h2>Step 2: Create Virtual Hosting Configuration Files</h2>
<p>Now that Apahce2 is installed, all your virtual host configurations file will live in the directory below. Each file will end in .conf.</p>
<p><strong>/etc/apache2/sites-available/</strong></p>
<p>Run each of the line below to create new virtual host configuration file.</p>
<p>
	<sapn>sudo nano /etc/apache2/sites-available/VirtualHost1.conf</sapn>
</p>	

<h2>Step 3: Configure VirtualHost Files</h2>
<p>	Now that your created three virtual host files, you can copy and paste the codes below into each file and save. Each configuration file will have information on the website and domain it controls.. so there should be three separate configurations.</br>
Copy the block and paste the block of code below in each file corresponding with each website or domain.</p>

<p><VirtualHost *:80>

    ServerAlias www.virtualhost1.com
    ServerName virtualhost1.com
    ServerAdmin admin@virtualhost1.com
    DocumentRoot /var/www/html/virtualhost1.com
    ErrorLog /var/log/apache2/virtual.host.error.log
    CustomLog /var/log/apache2/virtual.host.access.log combined
    LogLevel warn
</VirtualHost>
</p>
<p>Save and close the file when you are finished.</p>

<h2>Step Five — Enable the New Virtual Host Files</h2>
<p>Now that we have created our virtual host files, we must enable them. Apache includes some tools that allow us to do this.</br>
We can use the a2ensite tool to enable each of our sites like this:</p>
<p>sudo a2ensite virtualhost1.com.conf</p>
<p>When you are finished, you need to restart Apache to make these changes take effect:</p>

<p>
	<sapn> /etc/apache2/sites-enable</sapn>
</p>
<p>sudo a2ensite virtualhost1.com</p>


<p> in new termial run ifconfigip </p>
<p>sudo nano /etc/hosts</p>
<p>127.0.0.1    localhost </br>
   123.45.67.890   www.virtualhost1.com</p>
<p>sudo service apache2 restart</p>

<h2>Step Seven — Test your Results</h2>
<p>http://virtualhost1.com</p>

