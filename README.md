# 说明:

- Vim作为编辑器之神，能在双手不离开键盘的情况下实现各种高效的文本编辑操作；
- Markdown作为一种非常简单的标记语言，能在不需要鼠标指指点点的情况下就完成一篇漂亮的排版文章。
- 所以，结合Vim和Markdown，基本就可以达到传说中的"键"不离手了！
- 注意: VimMarkdown 适用于有一定开发基础的用户

# markdown文件位置 
```
./markdown/mark.md
```

# 依赖: php环境/nginx环境

# 安装步骤
## 第一步: 安装composer
```
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```
## 第二步 安装markdown样式 (需要有git命令)
```
git clone git@github.com:sindresorhus/github-markdown-css.git
```
## 第三步: 安装markdown解析PHP组件
```
composer require michelf/php-markdown
```
## 第四步: 访问index.php 
