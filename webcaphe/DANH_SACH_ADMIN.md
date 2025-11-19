# DANH SÁCH THÀNH PHẦN VÀ BIẾN CỐ - PHẦN ADMIN

## 1. Button/Nút bấm chức năng (Admin):

- **Đăng xuất**: Nút logout ở tất cả các trang admin
- **Thêm mới**: Thêm sản phẩm, thêm người dùng
- **Sửa**: Chỉnh sửa sản phẩm, sửa thông tin người dùng
- **Xóa**: Xóa sản phẩm, xóa người dùng
- **Tìm kiếm**: Tìm kiếm sản phẩm theo tên/ID, tìm kiếm người dùng theo username/email, tìm kiếm đơn hàng
- **Làm mới**: Làm mới danh sách sản phẩm, danh sách đơn hàng, danh sách người dùng
- **Xem chi tiết**: Xem chi tiết đơn hàng, xem lịch sử mua của người dùng
- **Cập nhật trạng thái đơn hàng**: Thay đổi trạng thái từ pending → processing → shipping → delivered hoặc hủy
- **Thêm sản phẩm mới**: Nút "Thêm sản phẩm mới" ở trang quản lý sản phẩm
- **Chỉnh sửa sản phẩm**: Nút edit ở từng dòng sản phẩm
- **Xóa sản phẩm**: Nút delete ở từng dòng sản phẩm
- **Quản lý người dùng**: Nút add, edit, delete người dùng
- **Xem lịch sử đơn hàng**: Nút xem chi tiết đơn hàng của từng người dùng

---

## 2. Thanh điều hướng (Admin Sidebar - Bên trái):

- **Dashboard** (Tổng quan): Hiển thị tổng quan thống kê
- **Sản phẩm** (Quản lý hàng hóa): Quản lý danh sách sản phẩm cà phê
- **Đơn hàng** (Quản lý đơn hàng): Quản lý đơn hàng từ khách hàng
- **Người dùng** (Quản lý khách hàng): Quản lý tài khoản người dùng
- **Thống kê** (Analytics): Xem báo cáo thống kê (nếu có)
- **Đăng xuất**: Thoát khỏi hệ thống admin

---

## 3. Màn hình Dashboard (Admin) gồm các thẻ thông tin:

- **Tổng doanh thu**: Tính từ các đơn hàng đã thanh toán hoặc đã giao hàng (VNĐ)
- **Tổng số sản phẩm**: Số lượng sản phẩm trong cơ sở dữ liệu
- **Tổng số người dùng**: Số lượng tài khoản người dùng đã đăng ký
- **Tổng số đơn hàng**: Số lượng đơn hàng tất cả (pending, processing, shipped, delivered, cancelled)
- **Lời chào mừng**: Thông báo chào mừng admin
- **Đơn hàng gần đây**: Danh sách 5 đơn hàng mới nhất
- **Sản phẩm mới nhất**: Danh sách 5 sản phẩm mới nhất được thêm

---

## 4. Các bảng dữ liệu trong từng mục quản lý:

### Trang Quản lý Sản phẩm (Admin):
**Cột hiển thị:**
- ID sản phẩm
- Tên sản phẩm
- Giá (VNĐ)
- Danh mục (Arabica, Robusta, Chồn, Khác)
- Tồn kho (số lượng)
- Mô tả sản phẩm
- Hình ảnh
- Ngày tạo
- Hành động (Edit, Delete)

### Trang Quản lý Đơn hàng (Admin):
**Cột hiển thị:**
- ID đơn hàng
- Tên khách hàng
- Tổng tiền (VNĐ)
- Trạng thái (pending, processing, shipping, delivered, cancelled)
- Phương thức thanh toán (cash, transfer, etc)
- Ngày đặt hàng
- Địa chỉ giao hàng
- Hành động (View, Update Status, Delete)

### Trang Quản lý Người dùng (Admin):
**Cột hiển thị:**
- ID người dùng
- Tài khoản (Username)
- Email
- Họ tên
- Số điện thoại
- Địa chỉ
- Ngày tạo tài khoản
- Trạng thái (active/inactive)
- Hành động (Edit, Delete, View Orders)

---

## 5. Các bộ lọc và tìm kiếm (Admin):

- **Tìm kiếm sản phẩm**: Theo ID, tên sản phẩm, danh mục
- **Lọc sản phẩm**: Theo danh mục (Arabica, Robusta, Chồn, Khác)
- **Tìm kiếm đơn hàng**: Theo ID đơn hàng, tên khách hàng
- **Lọc đơn hàng**: Theo trạng thái, khoảng thời gian (từ ngày - đến ngày), địa chỉ giao
- **Tìm kiếm người dùng**: Theo username, email, họ tên
- **Lọc người dùng**: Theo trạng thái tài khoản, ngày tạo

---

## 6. DANH SÁCH BIẾN CỐ (EVENTS) - ADMIN

### 6.1. Biến cố liên quan đến xác thực (Authentication):

- **Đăng nhập Admin thành công**: Admin nhập thông tin đúng, được chuyển hướng vào Dashboard
- **Đăng nhập Admin thất bại**: Sai tài khoản hoặc mật khẩu, hiển thị thông báo lỗi
- **Đăng xuất Admin**: Admin đăng xuất khỏi hệ thống, xóa session

---

### 6.2. Biến cố liên quan đến Sản phẩm (Admin):

- **Xem danh sách sản phẩm**: Admin truy cập trang quản lý sản phẩm
- **Thêm sản phẩm mới**: Admin tạo sản phẩm mới với các thông tin:
  - Tên sản phẩm
  - Giá (VNĐ)
  - Mô tả sản phẩm
  - Danh mục (Arabica, Robusta, Chồn, Khác)
  - Hình ảnh
  - Tồn kho (số lượng ban đầu)
- **Thêm sản phẩm thành công**: Thông báo "Sản phẩm đã được thêm thành công"
- **Chỉnh sửa sản phẩm**: Admin cập nhật thông tin sản phẩm (tên, giá, mô tả, danh mục, hình ảnh, tồn kho)
- **Chỉnh sửa sản phẩm thành công**: Thông báo "Sản phẩm đã được cập nhật thành công"
- **Xóa sản phẩm**: Admin xóa sản phẩm khỏi hệ thống (có thể soft delete để không mất dữ liệu lịch sử)
- **Xóa sản phẩm thành công**: Thông báo "Sản phẩm đã được xóa thành công"
- **Tìm kiếm sản phẩm**: Admin tìm sản phẩm theo ID, tên hoặc danh mục
- **Lọc sản phẩm**: Admin lọc sản phẩm theo danh mục hoặc tồn kho
- **Cập nhật tồn kho**: Cột tồn kho tự động giảm khi có đơn hàng được xác nhận
- **Sản phẩm sắp hết/đã hết**: Cảnh báo khi tồn kho ≤ 0 (thay đổi màu hoặc thêm badge cảnh báo)
- **Làm mới danh sách sản phẩm**: Tải lại danh sách từ server

---

### 6.3. Biến cố liên quan đến Đơn hàng (Admin):

- **Xem danh sách đơn hàng**: Admin truy cập trang quản lý đơn hàng
- **Xem chi tiết đơn hàng**: Admin xem thông tin chi tiết, danh sách sản phẩm, và trạng thái của một đơn hàng
  - Mã đơn hàng
  - Tên khách hàng
  - Danh sách sản phẩm (tên, số lượng, giá)
  - Tổng tiền (VNĐ)
  - Trạng thái hiện tại
  - Ngày đặt hàng
  - Địa chỉ giao hàng
  - Phương thức thanh toán
- **Cập nhật trạng thái đơn hàng**: Admin thay đổi trạng thái:
  - pending (Chờ xác nhận) → processing (Đang xử lý)
  - processing → shipping (Đang giao hàng)
  - shipping → delivered (Đã giao hàng)
  - Hoặc cancelled (Đã hủy) từ bất kỳ trạng thái nào
- **Cập nhật trạng thái thành công**: Thông báo "Cập nhật trạng thái đơn hàng thành công"
- **Xác nhận đơn hàng**: Admin xác nhận đơn hàng từ trạng thái pending → processing
  - Tồn kho sản phẩm tự động giảm
  - Gửi thông báo cho khách hàng (nếu có)
- **Huỷ đơn hàng**: Admin huỷ đơn hàng, hoàn lại tồn kho sản phẩm
  - Cập nhật trạng thái → cancelled
  - Hoàn lại số lượng sản phẩm vào tồn kho
  - Gửi thông báo cho khách hàng
- **Tìm kiếm đơn hàng**: Admin tìm kiếm theo ID, tên khách hàng
- **Lọc đơn hàng**: Admin lọc theo:
  - Trạng thái (pending, processing, shipping, delivered, cancelled)
  - Khoảng thời gian (từ ngày - đến ngày)
  - Địa chỉ giao (tỉnh/thành phố, quận/huyện)
- **Làm mới danh sách đơn hàng**: Tải lại danh sách từ server
- **Xuất báo cáo đơn hàng**: Admin xuất danh sách đơn hàng ra file (PDF/Excel) - tùy chọn

---

### 6.4. Biến cố liên quan đến Người dùng (Admin):

- **Xem danh sách người dùng**: Admin truy cập trang quản lý người dùng
- **Tìm kiếm người dùng**: Admin tìm kiếm theo username, email, họ tên
- **Xem chi tiết người dùng**: Admin xem thông tin:
  - ID, Username, Email
  - Họ tên, Số điện thoại
  - Địa chỉ, Ngày tạo tài khoản
  - Trạng thái tài khoản
- **Xem lịch sử mua hàng**: Admin xem danh sách đơn hàng của từng người dùng
- **Thêm người dùng mới**: Admin tạo tài khoản người dùng mới (nếu cần)
  - Nhập username, email, mật khẩu
  - Họ tên, số điện thoại
- **Chỉnh sửa thông tin người dùng**: Admin cập nhật thông tin (email, họ tên, số điện thoại)
- **Chỉnh sửa thành công**: Thông báo "Thông tin người dùng đã được cập nhật"
- **Xóa người dùng**: Admin xóa tài khoản người dùng (soft delete - không mất dữ liệu lịch sử)
- **Xóa thành công**: Thông báo "Người dùng đã được xóa thành công"
- **Khóa/Mở khóa tài khoản**: Admin vô hiệu hóa hoặc kích hoạt tài khoản (nếu có)
- **Làm mới danh sách người dùng**: Tải lại danh sách từ server

---

### 6.5. Biến cố liên quan đến thông báo (Notifications):

- **Thêm sản phẩm thành công**: Thông báo xanh "Sản phẩm đã được thêm thành công"
- **Xóa sản phẩm thành công**: Thông báo xanh "Sản phẩm đã được xóa thành công"
- **Cập nhật đơn hàng thành công**: Thông báo xanh "Cập nhật trạng thái đơn hàng thành công"
- **Lỗi trong quá trình xử lý**: Thông báo đỏ với chi tiết lỗi
- **Xác nhận trước khi xóa**: Hộp thoại xác nhận "Bạn có chắc chắn muốn xóa không?"

---

### 6.6. Biến cố liên quan đến dữ liệu (Data Events):

- **Kiểm tra kết nối CSDL**: Kiểm tra kết nối tới MySQL khi page load
  - Nếu lỗi: Hiển thị thông báo "Kết nối thất bại"
- **Chuẩn bị CSDL**: Tự động tạo bảng nếu chưa tồn tại (products, orders, users, categories)
- **Cập nhật tồn kho tự động**: Tồn kho giảm khi đơn hàng được xác nhận
- **Log hoạt động**: Ghi nhận các hành động quan trọng (add, edit, delete, status update)

---

## 7. QUY TRÌNH QUẢN LÝ CỦA ADMIN:

### Quy trình Quản lý Sản phẩm:
1. Dashboard → Sản phẩm
2. Thêm mới → Nhập thông tin → Lưu → Thông báo thành công
3. Hoặc: Chọn sản phẩm → Edit → Sửa thông tin → Lưu
4. Hoặc: Chọn sản phẩm → Delete → Xác nhận → Xóa thành công
5. Tìm kiếm/Lọc theo danh mục → Xem kết quả

### Quy trình Quản lý Đơn hàng:
1. Dashboard → Đơn hàng
2. Xem danh sách đơn hàng (với trạng thái)
3. Xem chi tiết → Kiểm tra sản phẩm, tổng tiền, địa chỉ
4. Cập nhật trạng thái (pending → processing → shipping → delivered)
5. Nếu có vấn đề → Huỷ đơn hàng → Hoàn lại tồn kho
6. Lọc theo trạng thái/thời gian → Xem kết quả

### Quy trình Quản lý Người dùng:
1. Dashboard → Người dùng
2. Xem danh sách người dùng
3. Tìm kiếm/Xem chi tiết
4. Edit thông tin → Lưu
5. Xem lịch sử mua hàng
6. Nếu cần: Khóa/Xóa tài khoản

---

**Ngày cập nhật:** 14/11/2025  
**Phiên bản:** 1.0  
**Loại:** Admin Panel
