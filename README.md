English follows:

# نرم‌افزار حساب‌داری گردرگ

این یک نرم‌افزار حساب‌داری و مدیریت ارتباط با مشتریان با PHP است که به صورت متن‌باز منتشر شده است. نگه‌داری و توسعه‌ی این پروژه از ابتدا و از این پس در پایگاه <https://git.gordarg.com/tayyebi/relations> انجام خواهد شد.

اگرچه این یک نرم‌افزار حساب‌داری در کنار هزاران هزار نرم‌افزار فوق‌العاده‌ی دیگر است، اما با سبک من در حساب‌داری و گزارش به مشتریان و پیگیری کارها و اندازه‌ی کسب و کار، هماهنگی نداشتند. در نتیجه پروژه را به مقدار نیاز و اصطلاحا به صورت On-demand توسعه دادیم. هر جا هر چیزی لازم باشد اضافه می‌کنیم. هدف این است که این برنامه کاربران خود را تشویق به انتخاب راه‌کارهای شفاف و ساده‌تر در حساب‌داری کند.

متشکرم.

# Home

A simple solution to double entry accounting. I personally keep track of my customers payments and my commitments using this simple tool.
It's based on [php-mvc-blog](https://github.com/tayyebi/php-mvc-blog)

# Screenshots

![screenshots of double entry accounting software](screenshots.png)

# Environment Setup

```
sudo apt install php8.1-fpm
sudo a2enconf php8.1-fpm
sudo apt install php8.1-sqlite3
sudo a2enmod rewrite
sudo apt-get install php7.2-xml
```

# Installation

```
docker-compose up -d
```

# Permissions
```
find . -type d -exec sudo chmod 755 {} \;
find . -type f -exec sudo chmod 644 {} \;
sudo chown www-data:www-data -R database/ ;
```
