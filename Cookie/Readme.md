# Cookie trong php
- là một tập tin nhỏ được lưu trữ trên máy người dùng (trình duyệt giúp lưu lại giữa các lần truy cập)
- setcookie(name, value, expire, path, domain, sercure, httponly);
- name: tên của cookie
- value: giá trị của cookie
- expire: thời điểm hết hạn (cookie chết)
- path: đường dẫn áp dụng cookie
- domain: tên miền áp dụng
- sercure: true->https
- httponly: ngăn chặn js và tăng cường bảo mật

-getcookie

-Xóa cookie

- $_REQUEST: $_GET, $_POST, $_COOKIE;
