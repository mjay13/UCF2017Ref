# Git Workflow Description

-----

## Steps to Do *Once* Per Project

0. Make sure that the Project Manager has added you as a collaborator, and that you have accepted the collaborator invitation (check email if necessary).

1. Clone the project to your local machine

    `git clone <url-to-project-repo.git>`

2. Change into the project directory

    `cd Group-Project`

3. Create a new branch with a name representing the feature you will work on.

    `git branch <name-of-new-feature-branch>`

4. Switch into the new feature branch

    `git checkout <name-of-new-feature-branch>`
    
    **Note**:
    Steps 3 and 4 can be combined with a single command:
    `git checkout -b <name-of-new-feature-branch>`
-----

## Development Workflow

0. Verify what branch you are currently working on, and switch into the correct branch if necessary.

    `git branch --list`
    
    `git checkout <name-of-new-feature-branch>`

1. Use your text editor of choice and write some awesome new code!

2. Use git to check what files have been modified

    `git status`

3. Stage the modifications you have made.

    `git add -A`

4. Commit the staged modifications.

    `git commit -m "Short description of changes"`

5. Push your commit to the feature branch on origin (i.e. GitHub).

    `git push origin <name-of-new-feature-branch>`

6. Repeat steps 1 - 5.

-----

## Merge Workflow

1. Checkout onto local master branch

    `git checkout master`

2. Pull in any changes that team members added to Origin Master while you were working

    `git pull origin master`

3. Checkout onto local feature branch

    `git checkout <name-of-new-feature-branch>`

4. Merge changes from local master onto your local feature branch

    `git merge master`

    4 (a). If auto-merge fails, resolve conflicts manually in Sublime (deleting the [extra characters that mark conflicting pairs of code](https://git-scm.com/docs/git-merge#_how_conflicts_are_presented)).

    4 (b). Then, add manual modifications.

    `git add -A`

    4 (c\). Then, commit the manual modifications.

    `git commit`

5. After auto-merge or manual-merge, save git commit with VIM

    hit `esc` key
    type `:wq`
    hit `enter` key

6. Push your commit to the feature branch on origin (i.e. GitHub). 
    `git push origin <name-of-new-feature-branch>`

7. Repeat steps 1 - 6 each time a new commit is made to Origin Master

-----

## Pull Request Workflow

1. Go to repo on Github.

2. Click "Compare & Pull Request"

3. Click "Create Pull Request"

4. Project Manager will click "Merge Pull Request" & "Confirm Merge"

5. Congrats, your feature is live on the master branch!

Github documentation [on Pull Requests](https://help.github.com/articles/about-pull-requests/)
