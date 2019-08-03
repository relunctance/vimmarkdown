#!/bin/sh

# 说明:
- vimmarkdown 用于有一定开发基础,想用Vim神器编辑markdown的用户

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
