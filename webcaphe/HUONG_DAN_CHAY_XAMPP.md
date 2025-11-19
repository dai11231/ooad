# Hướng Dẫn Chạy Website Cà Phê Đậm Đà với XAMPP

## Bước 1: Khởi động XAMPP

1. Mở **XAMPP Control Panel** (tìm "XAMPP Control Panel" trong menu Start)
2. Khởi động 2 services sau:
   - **Apache** - Click nút "Start" (nút sẽ chuyển sang màu xanh khi đã khởi động)
   - **MySQL** - Click nút "Start" (nút sẽ chuyển sang màu xanh khi đã khởi động)

## Bước 2: Tạo Database

### Cách 1: Sử dụng phpMyAdmin (Khuyên dùng)

1. Mở trình duyệt và truy cập: `http://localhost/phpmyadmin`
2. Click vào tab **"Import"** (Nhập) ở menu trên
3. Click nút **"Choose File"** và chọn file `lab1.sql` trong thư mục `lab1`
4. Scroll xuống và click nút **"Go"** (Thực hiện)
5. Đợi cho đến khi thấy thông báo "Import has been successfully finished"

### Cách 2: Sử dụng MySQL Command Line

1. Mở Command Prompt (CMD) hoặc PowerShell
2. Di chuyển đến thư mục XAMPP:
   ```
   cd C:\xampp\mysql\bin
   ```
3. Chạy lệnh:
   ```
   mysql.exe -u root -e "CREATE DATABASE IF NOT EXISTS lab1;"
   mysql.exe -u root lab1 < C:\xampp\htdocs\webcaphe\lab1\lab1.sql
   ```

## Bước 3: Kiểm tra cấu hình Database

File cấu hình database đã được thiết lập sẵn tại: `lab1/includes/db_connect.php`

Cấu hình mặc định:
- **Server:** localhost
- **Username:** root
- **Password:** (để trống)
- **Database:** lab1

Nếu bạn đã đổi password MySQL, cần sửa file `lab1/includes/db_connect.php`

## Bước 4: Truy cập Website

1. Mở trình duyệt (Chrome, Firefox, Edge...)
2. Truy cập địa chỉ:
   ```
   http://localhost/webcaphe/lab1/
   ```
   hoặc
   ```
   http://localhost/webcaphe/lab1/index.php
   ```

## Bước 5: Kiểm tra Website hoạt động

- Trang chủ sẽ hiển thị các sản phẩm cà phê
- Nếu có lỗi kết nối database, kiểm tra lại Bước 2 (đã import database chưa)
- Nếu có lỗi 404, kiểm tra lại đường dẫn URL

## Trang Admin

Để truy cập trang quản trị:
```
http://localhost/webcaphe/lab1/admin/
```

## Khắc phục sự cố thường gặp

### Lỗi: "Kết nối thất bại"
- Kiểm tra MySQL đã khởi động chưa trong XAMPP Control Panel
- Kiểm tra database `lab1` đã được tạo chưa trong phpMyAdmin
- Kiểm tra file `lab1/includes/db_connect.php` có đúng thông tin không

### Lỗi: "Access forbidden" hoặc "403"
- Kiểm tra file có trong thư mục `C:\xampp\htdocs\webcaphe\lab1\` chưa
- Kiểm tra quyền truy cập thư mục

### Lỗi: "404 Not Found"
- Kiểm tra URL có đúng: `http://localhost/webcaphe/lab1/`
- Kiểm tra Apache đã khởi động chưa
- Kiểm tra file `index.php` có tồn tại không

### Port bị chiếm (Apache hoặc MySQL không start được)
- Thay đổi port trong XAMPP Control Panel:
  - Click "Config" của Apache → "httpd.conf" → Tìm `Listen 80` → Đổi thành `Listen 8080`
  - Click "Config" của MySQL → "my.ini" → Tìm `port=3306` → Đổi thành `port=3307`
  - Sau đó truy cập: `http://localhost:8080/webcaphe/lab1/`

## Dừng XAMPP

Khi không sử dụng, bạn có thể:
- Click "Stop" ở Apache và MySQL trong XAMPP Control Panel
- Hoặc để chạy nền (không cần dừng)

---

**Lưu ý:** 
- Đảm bảo XAMPP đã được cài đặt đúng cách
- Không nên đổi password MySQL nếu không cần thiết
- Luôn backup database trước khi thực hiện các thay đổi lớn

