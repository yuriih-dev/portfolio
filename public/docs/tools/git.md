#### Initialize

```dtd
rd .git /S/Q
git init
git add .
git commit -m "This React.js Express.js Node.js MySQL project "
git remote add origin https://github.com/bunbalhara/spring-boot-mybatis-maven-postgresql.git
git push -u origin master
```

#### Commands

- Clear cached file

```yarn
git rm --cached [FOLDER OR FILE NAME TO REMOVE] -r
```

- Squash commits

```yarn
git checkout main
git pull origin main
git checkout -b feature/styling
git merge --squash styling
```

- Amend

```yarn
git commit --amend --author="lovecoding-git <bhupaudel0@gmail.com>"
```

- Add a new remote

```yarn
git remote add origin [GIT_REPOSITORY_URL]
```

- Change the url of an existing remote repository

```yarn
git remote set-url origin [GIT_REPOSITORY_URL]
```

#### Most git commit prefixes

```dotenv
[
'build',
'chore',
'ci',
'docs',
'feat',
'fix',
'perf',
'refactor',
'revert',
'style',
'test'
]
```

#### Configure global gitignore file

- make .gitignore on home or Administrator for window
- Then run following command on cmd
  `git config --global core.excludesfile ~/.gitignore`
