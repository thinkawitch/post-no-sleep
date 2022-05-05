### Example page of mobile no-sleep with long post request

#### Usage
1. Place [NoSleep.min.js](https://raw.githubusercontent.com/richtr/NoSleep.js/master/dist/NoSleep.min.js) in project dir.
2. Configure webserver project.
3. Open index.html on mobile device.

Made with [NoSleep.js](https://github.com/richtr/NoSleep.js). Tested on iPhone Safari 15.4.

Don't forget to turn on keep alive connections and increase misc timeouts on webserver!

```
upstream php5fcgi {
    # other settings
    keepalive 16;
}

location ~ \.php$ {
    fastcgi_pass php5fcgi;
    # other settings
    # andrew test long post
    proxy_http_version 1.1;
    proxy_set_header Connection "";
    fastcgi_read_timeout 1200s;
}
```
