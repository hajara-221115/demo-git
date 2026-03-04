 ## Git Configuration Commands
## 1)Command Name : git config --global user.name 
##Syntax : 
git config --global user.name "your name" 
##purpose:
Sets the global username for all Git commits 
##Example :
git config --global user.name "Shaik Hajarabee" 
##screenshot:
<img width="434" height="43" alt="1a" src="https://github.com/user-attachments/assets/bba08d37-cb46-4c8b-b8a0-ab9f3fa80f85" />

## 2)Command Name : git config --global user.email
##Syntax : 
git config --global user.email "your@email.com"
##purpose:
Sets the global email for all Git commits
##Example :
git config --global user.email "skh@gmail.com"
##screenshot:
<img width="424" height="32" alt="1b" src="https://github.com/user-attachments/assets/b4917454-db5a-4c9e-a4d4-3dfb8eda570e" />

## 3)Command Name : git config --list
##Syntax : 
git config --list 
##purpose:
Displays all git configuration settings
##Example :
git config --list
##screenshot:
<img width="655" height="515" alt="1c" src="https://github.com/user-attachments/assets/45a78d58-020a-4fc3-bdbd-1bd0d654d86a" />

## 4)Command Name : git config --unset
##Syntax : 
git config --global --unset "skh@gmail.com"
##purpose:
Removes a specific configuration value
##Example :
git config --global --unset "skh@gmail.com"
##screenshot:


## Repository Setup Commands
## 1)Command Name : git init
##Syntax : 
git init
##purpose:
Initializes a new Git repository in the current folder
##Example :
git init
##screenshot:
<img width="531" height="48" alt="2a" src="https://github.com/user-attachments/assets/0bed50aa-bb63-457f-a781-297516d75966" />

## 2)Command Name : git clone
##Syntax : 
git clone <repository-url>
##purpose:
Creates a copy of a remote repository on your local system
##Example :
git clone https://github.com/hajara-221115/demo-git/new/master
##screenshot:


## 3)Command Name : git clone --branch
##Syntax : 
git clone --branch <branch-name> <repository-url>
##purpose:
Clones a specific branch from a repository.
##Example :
git clone --branch master https://github.com/hajara-221115/demo-git/new/master
##screenshot:

## 4)Command Name : git clone --depth
##Syntax : 
git clone --branch <number> <repository-url>
##purpose:
Clones only limited commit history(shallow clone).
##Example :
git clone --depth 1 https://github.com/hajara-221115/demo-git/new/master
##screenshot:


## Reposirtory Status and Inspection
## 1)Command Name : git status
##Syntax : 
git status
##purpose:
Showa current working directory status.
##Exmaple:
git status
##screenshot:

## 2)Command Name : git log
##Syntax : 
git log
##purpose:
Displays commit history.
##Example :
git log
##screenshot:


## 3)Command Name : git log --oneline
##Syntax : 
git log --oneline
##purpose:
Shows commit history in oneline format.
##Example :
git log --oneline
##screenshot:

## 4)Command Name : git log --graph
##Syntax : 
git log --graph --oneline --all
##purpose:
Displays branch structure visually.
##Example :
git log --graph --oneline --all
##screenshot:

## 5)Command Name : git show
##Syntax : 
git show <commit-id>
##purpose:
Shows details of a specific commit
##Example :
git show a1b2c3d
##screenshot:

## 6)Command Name : git diff
##Syntax : 
git diff
##purpose:
Shows changes between working directory and staging area
##Example :
git diff
##screenshot:

## 7)Command Name : git diff --staged
##Syntax : 
git diff --staged
##purpose:
Shows changes between staging area and last commit
##Example :
git difff --staged
##screenshot:

## 8)Command Name : git blame
##Syntax : 
git blame <file-name>
##purpose:
Shows who modified each line in a file.
##Example :
git blame index.html
##screenshot:

## 9)Command Name : git reflog
##Syntax : 
git reflog
##purpose:
Shows reference log of all HEAD changes
##Example :
git reflog
##screenshot:

## 10)Command Name : git shortlog
##Syntax : 
git shortlog
##purpose:
Summarizes commit history by author.
##Example :
git shortlog
##screenshot:

##File Tracking Commands
## 1)Command Name : git add
##Syntax : 
git add <file-name>
##purpose:
Adds a specific file to the staging area
##Example :
git add index.html
##screenshot:

## 2)Command Name : git add .
##Syntax : 
git add .
##purpose:
Adds all modified and new files to the staging area
##Example :
git add .
##screenshot:


## 3)Command Name : git add -p
##Syntax : 
git add -p
##purpose:
Adds changes interactively(partial changes).
##Example :
git add -p
##screenshot:


## 4)Command Name : git restore
##Syntax : 
git restore <file-name>
##purpose:
Restores a file from last commit(discards changes).
##Example :
git restore index.html
##screenshot:


## 5)Command Name : git restore --staged
##Syntax : 
git restore --staged <file-name>
##purpose:
Removes file from staging area.
##Example :
git restore --staged index.html
##screenshot:


## 6)Command Name : git rm
##Syntax : 
git rm <file-name>
##purpose:
Deletes a file and stages the deletion.
##Example :
git rm oldfile.txt
##screenshot:


## 1)Command Name : git mv
##Syntax : 
git mv <old-name> <new-name>
##purpose:
Renames or moves a file
##Example :
git mv file1.txt file2.txt
##screenshot:


##Commit commands
## 1)Command Name : git commit
##Syntax : 
git commit
##purpose:
Opens editor to write commit messgae and saves changes.
##Example :
git commit
##screenshot:



## 2)Command Name : git commit -m
##Syntax : 
git commit -m "message"
##purpose:
Commits changes with a message directly
##Example :
git commit -m "Added login feature"
##screenshot:


## 3)Command Name : git commit --amend
##Syntax : 
git commit --amend
##purpose:
Modifies the last commit
##Example :
git commit --amend -m "Updated commit message"
##screenshot:



## 4)Command Name : git commit --no-edit
##Syntax : 
git commit --amend --no-edit
##purpose:
Amends last commit without changing messge.
##Example :
git commit --amend --no-edit
##screenshot:


##Branch Management Commands
## 1)Command Name : git branch
##Syntax : 
git branch
##purpose:
Lists all local branches
##Example :
git branch
##screenshot:


## 2)Command Name : git branch -a
##Syntax : 
git branch -a
##purpose:
Lists all local and remote branches
##Example
git branch -a
##screenshot:

## 3)Command Name : git branch -d
##Syntax : 
git branch -d <branch-name>
##purpose:
Deletes a branch safely
##Example
git branch -d feature1
##screenshot:


## 3)Command Name : git branch -D
##Syntax : 
git branch -D <branch-name>
##purpose:
Force deleted a branch
##Example
git branch -D feature1
##screenshot:


## 4)Command Name : git checkout
##Syntax : 
git checkout <branch-name>
##purpose:
Switches to another branch
##Example
git checkout main
##screenshot:


## 5)Command Name : git chekout -b
##Syntax : 
git checkout -b <branch-name>
##purpose:
Creates and switches to a new branch
##Example
git checkout -b feature2
##screenshot:

## 6)Command Name : git switch
##Syntax : 
git switch <branch-name>
##purpose:
Switches branches(modern command)
##Example
git switch main
##screenshot:


## 7)Command Name : git swicth -c
##Syntax : 
git switch -c <branch-name>
##purpose:
Creates and switches to new branch
##Example
git switch -c feature3
##screenshot:


##Merge And Integration Commands
## 1)Command Name : git merge
##Syntax : 
git merge <branch-name>
##purpose:
Merges specified branch into current branch
##Example:
git merge fetaure1 
##screenshot:


## 2)Command Name : git merge --no-off
##Syntax : 
git merge --no-off <branch-name>
##purpose:
Forces a merge commit even if fast-forward is possible
##Example
git merge --no-off feature1
##screenshot:


##Remote Repository Commands
## 1)Command Name : git remote
##Syntax : 
git remote
##purpose:
Lists remote repository names.
##Example
git remote
##screenshot:


## 2)Command Name : git remote -v
##Syntax : 
git remote -v
##purpose:
Shows remote URLs.
##Example
git remote -v
##screenshot:


## 3)Command Name : git remote add
##Syntax : 
git remote add <name> <url>
##purpose:
Adds a new remote repository.
##Example
git remote add origin https://github.com/hajara-221115/demo-git/new/master
##screenshot:


## 4)Command Name : git remote remove
##Syntax : 
git remote remove <name>
##purpose:
Remotes remote repository.
##Example
git remote add origin 
##screenshot:










