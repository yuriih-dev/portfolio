#### Install Nginx (Aws)

- `sudo amazon-linux-extras install nginx1`

#### Nginx Configuration

- go to etc/nginx/site-available
- make a config file with domain name you are going to add.

```dotenv
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

1. restart

```dtd
sudo systemctl restart nginx

or

service nginx restart
```

2. clear cache

```dtd
sudo service nginx stop
sudo rm -rf /var/cache/nginx/*
sudo service nginx start
```

#### Trouble Shootings

1. [Duplication of default server](https://stackoverflow.com/questions/30973774/nginx-duplicate-default-server-error)
