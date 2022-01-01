#### Commands

- unzip `unzip [FILE_NAME]`
- rename file `mv [FILE_NAME_1] [FILE_NAME_2]`

#### Installations

- install zip

```
sudo apt install zip
```
### Install Docker & Docker Composer
```dtd
sudo apt install docker.io
docker ps
sudo usermod -aG docker develop
sudo apt install docker-composer
```


### Install Github Desktop
- Download the latest release
```dtd
sudo wget https://github.com/shiftkey/desktop/releases/download/release-2.6.3-linux1/GitHubDesktop-linux-2.6.3-linux1.deb
```
- If you don't already have gdebi-core installed, install it by running the following command:
```dtd
sudo apt install gdebi-core
```
- then run the following command to finish the desktop installation
```dtd
sudo gdebi /home/your_username/GitHubDesktop-linux-2.6.3-linux1.deb
```