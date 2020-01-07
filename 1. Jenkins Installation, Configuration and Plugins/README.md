# Jenkins Installation + Configuration + Plugin Management

1. Download Generic Jenkins .war file from [Jenkins website](https://jenkins.io/download/)
2. Store **jenkins.war** file on any path you want.
3. Go to the path where jenkins.war file is stored and type following command on command prompt:
```
$ java -jar jenkins.war
```
4. Open **localhost:8080** on the browser.
5. Authenticate Jenkins using authentication key generated on command line.
6. Select **install suggested plugins.**
7. Signup with administrator account.

## Note
If Jenkins does not executes successfully and opens up after step 3, try changing the port using the following command:
```
$ java -jar jenkins.war --httpPort=<portnumber>
```
