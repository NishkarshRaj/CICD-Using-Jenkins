# Using Jenkins to build a Maven project hosted on GitHub

1. Create new item -> Free Style project.
2. In Source Code Management, choose Git and specify URL of the repository where the Maven project is stored.
3. In build triggers, specify the path of root POM.xml file in **Trigger builds remotely via scripts.**
4. In Build commands, specify Windows Batch command execution and write Maven commands:
```
$ mvn clean
$ mvn compile
$ mvn install
```
5. Close project and Build it.
