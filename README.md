## Usage

Just spawn up the PhishDock infrastructure via:

````
docker compose up -d
````

This will spawn up the following containers:

- Nginx Proxy Manager # Reverse Proxy with GUI
- Gophish # Phishing Framework with GUI
- Nginx # Webserver for additional landing pages
- PHP # Optional PHP support for the nginx webserver

## Default credentials

### Nginx Proxy Manager

The Nginx Proxy Manager instance will be available at http://127.0.0.1:81.

The default login credentials are:

````
example@phishdock.com:PhishDock!
````

**Note**: You must change this default password at first login.

### Gophish

The Gophish instance will be available at http://127.0.0.1:3333.

The default login credentials are:

````
admin:phishdock
````

**Note**: You must change this default password at first login.
