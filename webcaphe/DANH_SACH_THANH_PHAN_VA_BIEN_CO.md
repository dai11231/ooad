# DANH SÁCH THÀNH PHẦN VÀ BIẾN CỐ HỆ THỐNG QUẢN LÝ CÀ PHÊ

## PHẦN I: DANH SÁCH THÀNH PHẦN

### 1. Button/Nút bấm chức năng:

#### Chung:
- **Đăng xuất**: Nút logout ở tất cả các trang admin và user
- **Thêm mới**: Thêm sản phẩm, thêm người dùng, thêm địa chỉ
- **Sửa**: Chỉnh sửa sản phẩm, sửa thông tin cá nhân, sửa địa chỉ
- **Xóa**: Xóa sản phẩm, xóa từ giỏ hàng, xóa địa chỉ
- **Tìm kiếm**: Tìm kiếm sản phẩm theo tên, tìm kiếm người dùng theo username/email, tìm kiếm đơn hàng
- **Làm mới**: Làm mới danh sách sản phẩm, làm mới danh sách đơn hàng, làm mới danh sách người dùng
- **Xác nhận**: Xác nhận đơn hàng, xác nhận thanh toán
- **Xem chi tiết**: Xem chi tiết đơn hàng, xem chi tiết sản phẩm, xem chi tiết tài khoản

#### Admin:
- **Cập nhật trạng thái đơn hàng**: Thay đổi trạng thái từ pending → processing → shipping → delivered hoặc hủy
- **Thêm sản phẩm mới**: Nút "Thêm sản phẩm mới" ở trang quản lý sản phẩm
- **Chỉnh sửa sản phẩm**: Nút edit ở từng dòng sản phẩm
- **Xóa sản phẩm**: Nút delete ở từng dòng sản phẩm
- **Quản lý người dùng**: Nút add, edit, delete người dùng
- **Xem lịch sử đơn hàng**: Nút xem chi tiết đơn hàng

#### User:
- **Thêm vào giỏ hàng**: Nút "Thêm vào giỏ hàng" trên trang sản phẩm
- **Xóa khỏi giỏ hàng**: Nút xóa từng sản phẩm trong giỏ hàng
- **Sửa số lượng**: Nút +/- hoặc input số lượng trong giỏ hàng
- **Thanh toán**: Nút "Thanh toán" trên trang giỏ hàng
- **Cập nhật thông tin cá nhân**: Nút "Lưu" trên trang profile
- **Đổi mật khẩu**: Nút "Đổi mật khẩu" trên trang profile
- **Quản lý địa chỉ**: Nút thêm, sửa, xóa địa chỉ
- **Đặt làm mặc định**: Nút đặt địa chỉ mặc định
- **Xem đơn hàng của tôi**: Nút xem danh sách đơn hàng cá nhân

---

### 2. Thanh điều hướng (Menu):

#### Admin Sidebar (Bên trái):
- **Dashboard** (Tổng quan): Hiển thị tổng quan thống kê
- **Sản phẩm**: Quản lý danh sách sản phẩm cà phê
- **Đơn hàng**: Quản lý đơn hàng từ khách hàng
- **Người dùng**: Quản lý tài khoản người dùng
- **Thống kê**: Xem báo cáo thống kê (nếu có)
- **Đăng xuất**: Thoát khỏi hệ thống admin

#### User Header (Trên cùng):
- **Trang chủ**: Quay lại trang chủ
- **Sản phẩm**: Xem danh sách sản phẩm
  - Arabica
  - Robusta
  - Chồn
  - Khác
- **Giỏ hàng**: Xem giỏ hàng (với số lượng sản phẩm)
- **Tài khoản** (khi đã đăng nhập):
  - Hồ sơ cá nhân
  - Đơn hàng của tôi
  - Sổ địa chỉ
  - Đăng xuất
- **Đăng nhập / Đăng ký** (khi chưa đăng nhập)

---

### 3. Màn hình Dashboard (Admin) gồm các thẻ thông tin:

- **Tổng doanh thu**: Tính từ các đơn hàng đã thanh toán hoặc đã giao hàng (VNĐ)
- **Tổng số sản phẩm**: Số lượng sản phẩm trong cơ sở dữ liệu
- **Tổng số người dùng**: Số lượng tài khoản người dùng đã đăng ký
- **Tổng số đơn hàng**: Số lượng đơn hàng tất cả (pending, processing, shipped, delivered, cancelled)
- **Lời chào mừng**: Thông báo chào mừng admin
- **Đơn hàng gần đây**: Danh sách 5 đơn hàng mới nhất
- **Sản phẩm mới nhất**: Danh sách 5 sản phẩm mới nhất được thêm

---

### 4. Các bảng dữ liệu trong từng mục quản lý:

#### Trang Quản lý Sản phẩm (Admin):
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

#### Trang Quản lý Đơn hàng (Admin):
**Cột hiển thị:**
- ID đơn hàng
- Tên khách hàng
- Tổng tiền (VNĐ)
- Trạng thái (pending, processing, shipping, delivered, cancelled)
- Phương thức thanh toán (cash, transfer, etc)
- Ngày đặt hàng
- Địa chỉ giao hàng
- Hành động (View, Update Status, Delete)

#### Trang Quản lý Người dùng (Admin):
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

#### Trang Sản phẩm (User):
**Thông tin hiển thị:**
- Danh mục sản phẩm (Arabica, Robusta, Chồn, Khác)
- Hình ảnh sản phẩm
- Tên sản phẩm
- Giá (VNĐ)
- Mô tả sản phẩm
- Trạng thái tồn kho (Còn hàng / Hết hàng)
- Nút "Thêm vào giỏ hàng"
- Nút "Xem chi tiết"

#### Trang Giỏ hàng (User):
**Thông tin hiển thị:**
- Hình ảnh sản phẩm
- Tên sản phẩm
- Giá từng sản phẩm (VNĐ)
- Số lượng (có thể sửa)
- Thành tiền (Giá × Số lượng)
- Nút "Xóa"
- **Tổng cộng** (Tính tổng của tất cả sản phẩm)
- Nút "Tiếp tục mua hàng"
- Nút "Thanh toán"

#### Trang Chi tiết Đơn hàng (User):
**Thông tin hiển thị:**
- Mã đơn hàng
- Ngày đặt hàng
- Trạng thái đơn hàng (pending, processing, shipping, delivered)
- Danh sách sản phẩm trong đơn:
  - Tên sản phẩm
  - Số lượng
  - Giá từng sản phẩm
  - Thành tiền
- **Tổng cộng** (VNĐ)
- Thông tin giao hàng:
  - Người nhận
  - Số điện thoại
  - Địa chỉ giao hàng
- Phương thức thanh toán
- Ngày dự kiến giao hàng

#### Trang Hồ sơ cá nhân (User):
**Thông tin hiển thị:**
- Họ tên
- Email
- Số điện thoại
- Địa chỉ hiện tại
- **Sổ địa chỉ:**
  - Danh sách các địa chỉ đã lưu
  - Người nhận
  - Số điện thoại
  - Địa chỉ chi tiết (Số nhà, đường)
  - Phường/Xã
  - Quận/Huyện
  - Tỉnh/Thành phố
  - Nút đặt làm mặc định
  - Nút chỉnh sửa
  - Nút xóa

#### Trang Đơn hàng của tôi (User):
**Bảng hiển thị:**
- Mã đơn hàng
- Ngày đặt hàng
- Tổng tiền (VNĐ)
- Trạng thái (pending, processing, shipping, delivered, cancelled)
- Nút "Xem chi tiết"

---

### 5. Các bộ lọc và tìm kiếm:

#### Admin:
- **Tìm kiếm sản phẩm**: Theo ID, tên sản phẩm, danh mục
- **Lọc sản phẩm**: Theo danh mục (Arabica, Robusta, Chồn, Khác)
- **Tìm kiếm đơn hàng**: Theo ID đơn hàng, tên khách hàng
- **Lọc đơn hàng**: Theo trạng thái, khoảng thời gian (từ ngày - đến ngày), địa chỉ giao
- **Tìm kiếm người dùng**: Theo username, email, họ tên
- **Lọc người dùng**: Theo trạng thái tài khoản, ngày tạo

#### User:
- **Tìm kiếm sản phẩm**: Theo tên sản phẩm
- **Lọc sản phẩm**: Theo danh mục (Arabica, Robusta, Chồn, Khác), giá
- **Tìm kiếm đơn hàng**: Theo ID đơn hàng, trạng thái

---

## PHẦN II: DANH SÁCH BIẾN CỐ (EVENTS)

### 1. Biến cố liên quan đến xác thực (Authentication):

- **Đăng nhập thành công**: Người dùng/Admin nhập thông tin đúng, được chuyển hướng vào hệ thống
- **Đăng nhập thất bại**: Sai tài khoản hoặc mật khẩu, hiển thị thông báo lỗi
- **Đăng ký tài khoản mới**: Người dùng tạo tài khoản mới với email chưa được đăng ký
- **Đăng xuất**: Người dùng/Admin đăng xuất khỏi hệ thống, xóa session
- **Đổi mật khẩu**: Người dùng thay đổi mật khẩu hiện tại thành mật khẩu mới
- **Quên mật khẩu**: Người dùng yêu cầu reset mật khẩu qua email (nếu có)

---

### 2. Biến cố liên quan đến Sản phẩm (Admin):

- **Thêm sản phẩm mới**: Admin tạo sản phẩm mới với các thông tin: tên, giá, mô tả, danh mục, hình ảnh, tồn kho
- **Chỉnh sửa sản phẩm**: Admin cập nhật thông tin sản phẩm (tên, giá, mô tả, danh mục, hình ảnh, tồn kho)
- **Xóa sản phẩm**: Admin xóa sản phẩm khỏi hệ thống (có thể soft delete để không mất dữ liệu lịch sử)
- **Tìm kiếm sản phẩm**: Admin tìm sản phẩm theo ID, tên hoặc danh mục
- **Lọc sản phẩm**: Admin lọc sản phẩm theo danh mục hoặc tồn kho
- **Cập nhật tồn kho**: Cột tồn kho tự động giảm khi có đơn hàng được xác nhận
- **Sản phẩm sắp hết/đã hết**: Cảnh báo khi tồn kho ≤ 0

---

### 3. Biến cố liên quan đến Đơn hàng (Admin):

- **Xem danh sách đơn hàng**: Admin truy cập trang quản lý đơn hàng
- **Xem chi tiết đơn hàng**: Admin xem thông tin chi tiết, danh sách sản phẩm, và trạng thái của một đơn hàng
- **Cập nhật trạng thái đơn hàng**: Admin thay đổi trạng thái:
  - pending (Chờ xác nhận)
  - processing (Đang xử lý)
  - shipping (Đang giao hàng)
  - delivered (Đã giao hàng)
  - cancelled (Đã hủy)
- **Xác nhận đơn hàng**: Admin xác nhận đơn hàng từ trạng thái pending → processing
- **Huỷ đơn hàng**: Admin huỷ đơn hàng, hoàn lại tồn kho sản phẩm
- **Tìm kiếm đơn hàng**: Admin tìm kiếm theo ID, tên khách hàng
- **Lọc đơn hàng**: Admin lọc theo trạng thái, khoảng thời gian, địa chỉ giao
- **Xuất báo cáo đơn hàng**: Admin xuất danh sách đơn hàng ra file (PDF/Excel)

---

### 4. Biến cố liên quan đến Người dùng (Admin):

- **Xem danh sách người dùng**: Admin truy cập trang quản lý người dùng
- **Thêm người dùng mới**: Admin tạo tài khoản người dùng mới (nếu cần)
- **Chỉnh sửa thông tin người dùng**: Admin cập nhật thông tin (email, họ tên, số điện thoại)
- **Xóa người dùng**: Admin xóa tài khoản người dùng (soft delete)
- **Tìm kiếm người dùng**: Admin tìm kiếm theo username, email, họ tên
- **Xem lịch sử mua hàng**: Admin xem danh sách đơn hàng của từng người dùng
- **Khóa/Mở khóa tài khoản**: Admin vô hiệu hóa hoặc kích hoạt tài khoản

---

### 5. Biến cố liên quan đến Giỏ hàng (User):

- **Thêm sản phẩm vào giỏ**: Người dùng nhấp nút "Thêm vào giỏ hàng", sản phẩm được lưu vào session
- **Xem giỏ hàng**: Người dùng xem danh sách sản phẩm, số lượng, giá từng sản phẩm, và tổng cộng
- **Sửa số lượng sản phẩm**: Người dùng tăng/giảm số lượng từng sản phẩm trong giỏ
- **Xóa sản phẩm khỏi giỏ**: Người dùng xóa một sản phẩm cụ thể khỏi giỏ hàng
- **Xóa tất cả giỏ hàng**: Người dùng xóa tất cả sản phẩm (nếu có nút này)
- **Kiểm tra tồn kho**: Hệ thống tự động kiểm tra tồn kho và hiển thị cảnh báo nếu:
  - Số lượng yêu cầu > tồn kho
  - Sản phẩm đã bị xóa
  - Giá sản phẩm thay đổi
- **Làm mới giỏ hàng**: Tải lại giỏ hàng từ server (sync)
- **Giỏ hàng trống**: Thông báo khi người dùng không có sản phẩm nào

---

### 6. Biến cố liên quan đến Thanh toán (User):

- **Bắt đầu thanh toán**: Người dùng nhấp "Thanh toán", chuyển đến trang checkout
- **Kiểm tra thông tin giao hàng**: Người dùng điền/chọn thông tin người nhận, địa chỉ giao hàng
- **Chọn phương thức thanh toán**: Người dùng chọn:
  - Thanh toán tiền mặt (COD - Cash on Delivery)
  - Chuyển khoản ngân hàng
  - Ví điện tử (nếu có)
- **Xác nhận đơn hàng**: Người dùng xác nhận thông tin và tạo đơn hàng
- **Thanh toán thành công**: Đơn hàng được tạo, giỏ hàng được xóa, nhận xác nhận qua email
- **Thanh toán thất bại**: Thông báo lỗi, giỏ hàng vẫn được giữ lại
- **Huỷ thanh toán**: Người dùng thoát khỏi trang checkout, quay lại giỏ hàng
- **In hóa đơn**: Người dùng in hóa đơn sau khi thanh toán thành công

---

### 7. Biến cố liên quan đến Hồ sơ cá nhân (User):

- **Xem hồ sơ cá nhân**: Người dùng xem thông tin tài khoản của mình
- **Cập nhật thông tin cá nhân**: Người dùng thay đổi:
  - Họ tên
  - Email
  - Số điện thoại
- **Cập nhật thành công**: Thông tin được lưu, hiển thị thông báo thành công
- **Đổi mật khẩu**: Người dùng nhập mật khẩu hiện tại, mật khẩu mới, xác nhận mật khẩu
- **Đổi mật khẩu thất bại**: Mật khẩu hiện tại sai, hiển thị lỗi
- **Đổi mật khẩu thành công**: Mật khẩu được cập nhật
- **Xem sổ địa chỉ**: Người dùng xem danh sách các địa chỉ đã lưu
- **Thêm địa chỉ mới**: Người dùng lưu một địa chỉ giao hàng mới (tối đa N địa chỉ)
- **Chỉnh sửa địa chỉ**: Người dùng cập nhật thông tin địa chỉ
- **Xóa địa chỉ**: Người dùng xóa một địa chỉ (không được xóa địa chỉ mặc định nếu là duy nhất)
- **Đặt làm mặc định**: Người dùng chọn một địa chỉ làm mặc định cho các lần mua hàng tiếp theo

---

### 8. Biến cố liên quan đến Đơn hàng (User):

- **Xem danh sách đơn hàng của tôi**: Người dùng xem tất cả đơn hàng đã đặt
- **Xem chi tiết đơn hàng**: Người dùng xem chi tiết một đơn hàng:
  - Mã đơn hàng
  - Ngày đặt
  - Danh sách sản phẩm
  - Tổng tiền
  - Trạng thái
  - Địa chỉ giao hàng
- **Theo dõi trạng thái đơn hàng**: Người dùng xem trạng thái hiện tại (pending, processing, shipping, delivered)
- **Huỷ đơn hàng**: Người dùng có thể huỷ đơn hàng nếu nó chưa được xác nhận hoặc đang xử lý
- **Tìm kiếm đơn hàng**: Người dùng tìm kiếm đơn hàng theo ID hoặc ngày

---

### 9. Biến cố liên quan đến Tìm kiếm và Lọc (User):

- **Tìm kiếm sản phẩm**: Người dùng nhập từ khóa tìm kiếm tên sản phẩm
- **Kết quả tìm kiếm**: Hiển thị danh sách sản phẩm khớp với từ khóa
- **Không có kết quả**: Thông báo "Không tìm thấy sản phẩm nào"
- **Lọc sản phẩm**: Người dùng chọn danh mục (Arabica, Robusta, Chồn, Khác)
- **Sắp xếp sản phẩm**: Sắp xếp theo giá (tăng/giảm), tên (A-Z), hoặc mới nhất
- **Phân trang**: Hiển thị sản phẩm theo trang

---

### 10. Biến cố liên quan đến thông báo (Notifications):

- **Thêm sản phẩm vào giỏ thành công**: Thông báo "Đã thêm X sản phẩm vào giỏ"
- **Xóa sản phẩm khỏi giỏ**: Thông báo "Đã xóa sản phẩm khỏi giỏ"
- **Giỏ hàng trống**: Cảnh báo "Giỏ hàng của bạn đang trống"
- **Sản phẩm bị xóa**: Cảnh báo "Sản phẩm đã bị xóa khỏi giỏ vì không còn tồn tại"
- **Tồn kho không đủ**: Cảnh báo "Số lượng không đủ, chỉ còn X sản phẩm"
- **Đơn hàng được tạo thành công**: Thông báo "Đơn hàng #ID đã được tạo thành công"
- **Cập nhật trạng thái đơn hàng**: Thông báo "Trạng thái đơn hàng #ID đã được cập nhật"
- **Lỗi trong quá trình xử lý**: Thông báo lỗi chi tiết

---

### 11. Biến cố liên quan đến dữ liệu (Data Events):

- **Kiểm tra kết nối CSDL**: Kiểm tra kết nối tới MySQL khi page load
- **Chuẩn bị CSDL**: Tự động tạo bảng nếu chưa tồn tại
- **Đồng bộ giỏ hàng**: Kiểm tra giỏ hàng giữa session và localStorage
- **Cập nhật giá sản phẩm**: Thông báo nếu giá thay đổi từ khi thêm vào giỏ
- **Cập nhật tồn kho tự động**: Tồn kho giảm khi đơn hàng được xác nhận
- **Log hoạt động**: Ghi nhận các hành động quan trọng (Admin)

---

## PHẦN III: QUAN HỆ GIỮA BIẾN CỐ VÀ THÀNH PHẦN

### Quy trình mua hàng của User:
1. User tìm kiếm/lọc sản phẩm → Xem chi tiết → Thêm vào giỏ → Thông báo thành công
2. Xem giỏ hàng → Sửa số lượng → Xóa sản phẩm → Cảnh báo tồn kho (nếu cần)
3. Nhấp "Thanh toán" → Điền thông tin giao hàng → Chọn phương thức thanh toán
4. Xác nhận → Đơn hàng được tạo → Giỏ hàng được xóa → Thông báo thành công
5. Xem đơn hàng của tôi → Xem chi tiết → Theo dõi trạng thái

### Quy trình quản lý của Admin:
1. Dashboard → Xem thống kê tổng quan
2. Quản lý Sản phẩm → Thêm/Sửa/Xóa → Quản lý tồn kho
3. Quản lý Đơn hàng → Xem chi tiết → Cập nhật trạng thái → Gửi thông báo
4. Quản lý Người dùng → Xem/Chỉnh sửa/Xóa tài khoản
5. Tìm kiếm/Lọc dữ liệu → Xuất báo cáo (nếu có)

---

**Ngày cập nhật:** 14/11/2025
**Phiên bản:** 1.0
**Tác giả:** Hệ thống quản lý Cà Phê Đậm Đà
