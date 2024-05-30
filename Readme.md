# Làm việc với GIT

## Cài đặt môi trường
- Cài GIT SCM

## Tạo 1 kho lưu trữ mới (create a new repository)

1. Tạo trực tiếp trên github thì sau khi tạo xong thì chạy lệnh
    
    Ví dụ Repo có link HTTP là: ```https://github.com/tongvanduc/fpoly-base-web3014.git```
    
    Lệnh: ``` git clone https://github.com/tongvanduc/fpoly-base-web3014.git```

2. Project có sẵn trên máy thì chạy tập lệnh sau:

    Ví dụ Repo có link HTTP là: ```https://github.com/tongvanduc/fpoly-base-web3014.git```

    ```
        git init
        git add .
        git commit -m "first commit"
        git branch -M main
        git remote add origin https://github.com/tongvanduc/fpoly-base-web3014.git
        git push -u origin main
    ```

    Nếu chạy lệnh ```git push -u origin main``` mà thấy xuất hiện dòng ```git push --set-upstream ....``` thì các em cần copy cái lệnh set-upstream đó để chạy. Vì lần đầu push code lên Repo nó hay như vậy.

## Đẩy code lên GIT

1. Sau khi hoàn thành bước ```Tạo 1 kho lưu trữ mới``` thì các bạn tiến hành đẩy code lên khi có thay đổi (Thêm/Sửa/Xóa file)

2. Chạy tập lệnh sau:

    ```
        git add .
        git commit -m "Mô tả thay đổi vào đây"
        git push
    ```

## GIT IGNORE

1. Khái niệm

    - Là thằng để quản lý các file KHÔNG ĐẨY LÊN GIT
    - Trong 1 project có thể có nhiều file ```.gitignore```

2. Trường hợp dự án đặt folder ```vendor``` trong .gitignore
    
    - Khi clone code từ git về thì ```cd``` vào trong thư mục dự án.
    - Chạy lệnh ```composer update``` or ```composer install```

## PACKAGE USING

1. Route: https://github.com/bramus/router
2. View: https://github.com/EFTEC/BladeOne
3. Model: https://github.com/doctrine/dbal/
    
    3.1. Lệnh cài: composer require doctrine/dbal
    
    3.2. Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html
4. Validate: https://github.com/rakit/validation
5. ENV: https://github.com/vlucas/phpdotenv
6. .htaccess: 
    ```
    RewriteEngine On
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php [L]
    ```