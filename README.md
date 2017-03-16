git practise

git log : 用图形线的样子表现： git log --oneline --graph --abbrev-commit

git reset --hard HEAD^ : 代表回退到上一个版本 HEAD 表示当前版本，HEAD^表示上一个版本，HEAD^^表示上2个版本，上100个版本HEAD～100

git remote add origin git@github.com:feraner/gitTest.git ：在本地的仓库添加远程仓库

git stash :将工作区的文件暂时存放起来，不提交

git stash pop ： 将之前存放的文件取出来，继续工作

git stash drop: 丢弃存放的工作记录,不要了

git reflog : 查看所用到的操作历史

git fetch origin 远程分支：本地分支 拉取远程分支到本地分支
