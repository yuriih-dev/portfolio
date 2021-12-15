#### Install Nginx (Aws)
- `sudo amazon-linux-extras install nginx1`

#### Nginx Configuration
- go to etc/nginx/site-available
- make a config file with domain name you are going to add.
```
server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name bhusan.bizinabox.com
    server_tokens off;
    root /home/forge/build

    index index.html index.htm index.php;

    charset utf-8;
}
```
#### Commands
- restart `sudo systemctl restart nginx` or `service nginx restart`