# Continuous Integration and Continuous Delivery using Jenkins CI tool

## Table of contents

[1. Installation of Jenkins + Jenkins Configuration + Plugin Management](1.%20Jenkins%20Installation%2C%20Configuration%20and%20Plugins)

[2. Creating pipeline of jobs in Jenkins](2.%20Chain%20of%20Jenkins%20job)

[3. Build Maven Project hosted on GitHub](3.%20Building%20Maven%20Project%20hosted%20on%20GitHub)

[4. BlueOcean Plugin for Pipeline management](4.%20BlueOcean%20Pipeline%20Plugin)

[5. Full Stack Project Management](5.%20Full%20Stack%20using%20Nexus%20Git%20Java%20Maven%20Jenkins)

[6. SonarQube Analysis](6.%20SonarQube%20Analysis)

[7. XAMPP](7.%20XAMPP/src)

[8. PHP MySQL Connection on XAMPP Server](8.%20PHP_MySQL)

[9. Sessions in PHP](9.%20Sessions%20in%20PHP)

# How to Collaborate:

1. Fork the repository to your own GitHub account.

2. Clone the repository to your local machine
```
$ git clone "https://www.github.com/{Username}/CICD-Using-Jenkins"
```
where username is your GitHub account username.

3. Create a branch where you can do your local work.
Never work on **master** branch as we do not allow master commits except by admins.
```
$ git branch {branchname}
$ git checkout branchname
```

4. Do your work and stage your changes.
```
$ git add <filename>
```

5. Commit you changes with a commit message containing your name, file(s) worked upon, changes added.
```
$ git commit -m "Name| files| Changes"
```

6. Push changes to your forked repository
```
$ git push -u origin branchname
```
7. Create a pull request to the upstream repository.

# Synchronize forked repository with Upstream repository

1. Create upstream as our repository
```
$ git remote add upstream "https://www.github.com/NishkarshRaj/CICD-Using-Jenkins"
```

2. Fetch upstream changes in local machine
```
$ git fetch upstream
```

3. Switch to master branch
```
$ git checkout master
```

4. Merge changes in local machine
```
$ git merge upstream/master
```

5. Push changes to your forked GitHub repository
```
$ git push -f origin master
```
