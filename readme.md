<h1>Deployar automaticamente</h1>
<h3>En el server:</h3>
cd /opt<br>
git init --bare lines_page.git<br>
vim lines_page.git/hooks/post-update<br>

```
#!/bin/sh
echo $1
echo "*UPDATE*"
case " $1 " in *'refs/heads/develop'*)
      GIT_WORK_TREE=/var/www/www.lines.edu_dev git checkout develop
      echo
      echo "Dev was pulled"
      echo
      ;;
esac
case " $1 " in *'refs/heads/master'*)
      GIT_WORK_TREE=/var/www/www.lines.edu git checkout -f master
      chmod 777 -R /var/www/www.lines.edu
      echo
      echo "Master was pulled"
      echo
      ;;
esac
```

<h3>En el desarrollador:</h3>
git remote add production ssh://ticket@gnu.frlp.utn.edu.ar:22/opt/lines_page.git<br>
git push production master