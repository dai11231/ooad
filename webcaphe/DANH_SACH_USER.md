# DANH SÁCH THÀNH PHẦN VÀ BIẾN CỐ - PHẦN USER

## 1. Button/Nút bấm chức năng (User):

- **Đăng xuất**: Nút logout ở header
- **Thêm vào giỏ hàng**: Nút "Thêm vào giỏ hàng" trên trang sản phẩm
- **Xem chi tiết**: Xem chi tiết sản phẩm, xem chi tiết đơn hàng
- **Sửa số lượng**: Nút +/- hoặc input số lượng trong giỏ hàng
- **Xóa khỏi giỏ hàng**: Nút xóa từng sản phẩm trong giỏ hàng
- **Thanh toán**: Nút "Thanh toán" trên trang giỏ hàng
- **Cập nhật thông tin cá nhân**: Nút "Lưu" trên trang profile
- **Đổi mật khẩu**: Nút "Đổi mật khẩu" trên trang profile
- **Quản lý địa chỉ**: Nút thêm, sửa, xóa địa chỉ
- **Đặt làm mặc định**: Nút đặt địa chỉ mặc định
- **Xem đơn hàng của tôi**: Nút xem danh sách đơn hàng cá nhân
- **Xác nhận**: Xác nhận thanh toán
- **Tìm kiếm/Làm mới**: Tìm kiếm sản phẩm, làm mới giỏ hàng
- **In hóa đơn**: Nút in hóa đơn sau khi thanh toán thành công

---

## 2. Thanh điều hướng (User Header - Trên cùng):

- **Logo / Trang chủ**: Quay lại trang chủ
- **Sản phẩm**: Xem danh sách sản phẩm theo danh mục
  - Arabica
  - Robusta
  - Chồn
  - Khác
- **Giỏ hàng**: Xem giỏ hàng (với số lượng sản phẩm hiển thị badge)
- **Tài khoản** (khi đã đăng nhập):
  - Hồ sơ cá nhân / Profile
  - Đơn hàng của tôi
  - Sổ địa chỉ
  - Đăng xuất
- **Đăng nhập / Đăng ký** (khi chưa đăng nhập)

---

## 3. Trang chủ (Home Page):

- **Banner quảng cáo**: Hình ảnh/slide quảng cáo sản phẩm
- **Danh mục sản phẩm**: Liên kết đến từng loại (Arabica, Robusta, Chồn, Khác)
- **Sản phẩm nổi bật**: 3-5 sản phẩm nổi bật hiển thị
  - Hình ảnh, Tên, Giá
  - Nút "Xem chi tiết" hoặc "Thêm vào giỏ"
- **Thông tin cửa hàng**: Địa chỉ, điện thoại, giờ mở cửa
- **Footer**: Liên hệ, về chúng tôi, chính sách

---

## 4. Các bảng dữ liệu trong từng mục quản lý:

### Trang Sản phẩm (User):
**Thông tin hiển thị:**
- Danh mục sản phẩm (Arabica, Robusta, Chồn, Khác)
- Hình ảnh sản phẩm
- Tên sản phẩm
- Giá (VNĐ)
- Mô tả sản phẩm (tóm tắt)
- Trạng thái tồn kho (Còn hàng / Hết hàng)
- Nút "Thêm vào giỏ hàng"
- Nút "Xem chi tiết"

### Trang Giỏ hàng (User):
**Bảng thông tin:**
- Hình ảnh sản phẩm
- Tên sản phẩm
- Giá từng sản phẩm (VNĐ)
- Số lượng (có thể sửa bằng +/- hoặc input)
- Thành tiền (Giá × Số lượng)
- Nút "Xóa"

**Tóm tắt:**
- Tổng số sản phẩm
- **Tổng cộng** (Tính tổng của tất cả sản phẩm)
- Nút "Tiếp tục mua hàng"
- Nút "Thanh toán"

### Trang Chi tiết Đơn hàng (User):
**Thông tin hiển thị:**
- Mã đơn hàng
- Ngày đặt hàng
- Trạng thái đơn hàng (pending, processing, shipping, delivered)
- **Danh sách sản phẩm** trong đơn:
  - Tên sản phẩm
  - Số lượng
  - Giá từng sản phẩm
  - Thành tiền
- **Tổng cộng** (VNĐ)
- **Thông tin giao hàng:**
  - Người nhận
  - Số điện thoại
  - Địa chỉ giao hàng
- Phương thức thanh toán
- Ngày dự kiến giao hàng
- Nút "In hóa đơn"
- Nút "Quay lại danh sách đơn hàng"

### Trang Hồ sơ cá nhân (User):
**Thông tin cá nhân:**
- Họ tên (có thể sửa)
- Email (có thể sửa)
- Số điện thoại (có thể sửa)
- Nút "Lưu thông tin"

**Đổi mật khẩu:**
- Mật khẩu hiện tại (nhập)
- Mật khẩu mới (nhập)
- Xác nhận mật khẩu mới (nhập)
- Nút "Đổi mật khẩu"

**Sổ địa chỉ:**
- Danh sách các địa chỉ đã lưu:
  - Người nhận
  - Số điện thoại
  - Địa chỉ chi tiết (Số nhà, đường)
  - Phường/Xã
  - Quận/Huyện
  - Tỉnh/Thành phố
  - Badge "Mặc định" (nếu là địa chỉ mặc định)
  - Nút "Đặt làm mặc định"
  - Nút "Chỉnh sửa"
  - Nút "Xóa"
- Nút "Thêm địa chỉ mới"

### Trang Đơn hàng của tôi (User):
**Bảng hiển thị:**
- Mã đơn hàng
- Ngày đặt hàng
- Tổng tiền (VNĐ)
- Trạng thái (pending, processing, shipping, delivered, cancelled)
- Nút "Xem chi tiết"
- Nút "Huỷ đơn hàng" (chỉ nếu chưa xử lý)

---

## 5. Các bộ lọc và tìm kiếm (User):

- **Tìm kiếm sản phẩm**: Theo tên sản phẩm (search bar)
- **Lọc sản phẩm**: Theo danh mục (Arabica, Robusta, Chồn, Khác)
- **Sắp xếp sản phẩm**: Sắp xếp theo giá (tăng/giảm), tên (A-Z), hoặc mới nhất
- **Phân trang**: Hiển thị sản phẩm theo trang (ví dụ: 12 sản phẩm/trang)
- **Tìm kiếm đơn hàng**: Theo ID đơn hàng, trạng thái

---

## 6. DANH SÁCH BIẾN CỐ (EVENTS) - USER

### 6.1. Biến cố liên quan đến xác thực (Authentication):

- **Đăng nhập thành công**: Người dùng nhập thông tin đúng, được chuyển hướng vào trang chủ
- **Đăng nhập thất bại**: Sai tài khoản hoặc mật khẩu, hiển thị thông báo lỗi
- **Đăng ký tài khoản mới**: Người dùng tạo tài khoản mới với email chưa được đăng ký
  - Nhập username, email, mật khẩu, xác nhận mật khẩu
  - Kiểm tra email có hợp lệ không
  - Kiểm tra mật khẩu đủ mạnh không
- **Đăng ký thành công**: Tài khoản được tạo, chuyển hướng vào đăng nhập
- **Đăng ký thất bại**: Thông báo lỗi (email đã tồn tại, mật khẩu yếu, v.v.)
- **Đăng xuất**: Người dùng đăng xuất khỏi hệ thống, xóa session
- **Đổi mật khẩu**: Người dùng thay đổi mật khẩu hiện tại thành mật khẩu mới
  - Kiểm tra mật khẩu hiện tại
  - Kiểm tra mật khẩu mới khớp với xác nhận
- **Đổi mật khẩu thành công**: Thông báo "Mật khẩu đã được cập nhật"
- **Đổi mật khẩu thất bại**: Thông báo lỗi (mật khẩu hiện tại sai, mật khẩu mới không khớp, v.v.)

---

### 6.2. Biến cố liên quan đến Sản phẩm (User):

- **Xem danh sách sản phẩm**: Người dùng truy cập trang sản phẩm
- **Xem chi tiết sản phẩm**: Người dùng xem thông tin chi tiết:
  - Tên sản phẩm, Giá (VNĐ)
  - Mô tả chi tiết
  - Hình ảnh (có thể zoom)
  - Tồn kho (số lượng còn lại)
  - Danh mục
  - Nút "Thêm vào giỏ hàng"
  - Nút "Quay lại"
- **Tìm kiếm sản phẩm**: Người dùng nhập từ khóa tìm kiếm tên sản phẩm
- **Kết quả tìm kiếm**: Hiển thị danh sách sản phẩm khớp với từ khóa
- **Không có kết quả**: Thông báo "Không tìm thấy sản phẩm nào"
- **Lọc sản phẩm**: Người dùng chọn danh mục (Arabica, Robusta, Chồn, Khác)
- **Sắp xếp sản phẩm**: Sắp xếp theo giá (tăng/giảm), tên (A-Z), hoặc mới nhất
- **Phân trang**: Người dùng điều hướng giữa các trang sản phẩm
- **Sản phẩm hết hàng**: Cảnh báo "Sản phẩm đã hết hàng", nút "Thêm vào giỏ" bị vô hiệu hóa

---

### 6.3. Biến cố liên quan đến Giỏ hàng (User):

- **Xem giỏ hàng**: Người dùng xem danh sách sản phẩm, số lượng, giá từng sản phẩm, và tổng cộng
- **Thêm sản phẩm vào giỏ**: Người dùng nhấp nút "Thêm vào giỏ hàng", sản phẩm được lưu vào session
  - Nếu sản phẩm đã có trong giỏ → tăng số lượng
  - Nếu sản phẩm chưa có → thêm mới vào giỏ
- **Thêm sản phẩm vào giỏ thành công**: Thông báo "Đã thêm X sản phẩm vào giỏ" (hoặc "tăng số lượng")
- **Sửa số lượng sản phẩm**: Người dùng tăng/giảm số lượng từng sản phẩm trong giỏ
  - Kiểm tra tồn kho
  - Cập nhật tổng cộng tự động
- **Xóa sản phẩm khỏi giỏ**: Người dùng xóa một sản phẩm cụ thể khỏi giỏ hàng
- **Xóa sản phẩm thành công**: Thông báo "Đã xóa sản phẩm khỏi giỏ"
- **Kiểm tra tồn kho**: Hệ thống tự động kiểm tra tồn kho và hiển thị cảnh báo nếu:
  - Số lượng yêu cầu > tồn kho
  - Sản phẩm đã bị xóa
  - Giá sản phẩm thay đổi
- **Cảnh báo tồn kho không đủ**: "Số lượng không đủ, chỉ còn X sản phẩm"
- **Cảnh báo sản phẩm bị xóa**: "Sản phẩm đã bị xóa khỏi giỏ vì không còn tồn tại"
- **Làm mới giỏ hàng**: Tải lại giỏ hàng từ server (sync giữa session và localStorage)
- **Giỏ hàng trống**: Thông báo "Giỏ hàng của bạn đang trống", nút "Tiếp tục mua hàng"

---

### 6.4. Biến cố liên quan đến Thanh toán (User):

- **Bắt đầu thanh toán**: Người dùng nhấp "Thanh toán", chuyển đến trang checkout
- **Kiểm tra đăng nhập**: Nếu chưa đăng nhập → chuyển hướng vào login
- **Giỏ hàng trống**: Nếu giỏ trống → thông báo, chuyển hướng vào giỏ hàng
- **Kiểm tra thông tin giao hàng**: Người dùng điền/chọn thông tin người nhận, địa chỉ giao hàng
  - Họ tên (tự động điền từ profile)
  - Email (tự động điền từ profile)
  - Số điện thoại (tự động điền từ profile)
  - Chọn địa chỉ từ sổ địa chỉ hoặc nhập mới:
    - Địa chỉ chi tiết (Số nhà, đường)
    - Phường/Xã, Quận/Huyện, Tỉnh/Thành phố
- **Chọn phương thức thanh toán**: Người dùng chọn:
  - Thanh toán tiền mặt (COD - Cash on Delivery)
  - Chuyển khoản ngân hàng (nếu có)
  - Ví điện tử (nếu có)
- **Xem lại đơn hàng**: Người dùng xem lại danh sách sản phẩm, số lượng, tổng tiền trước khi xác nhận
- **Xác nhận đơn hàng**: Người dùng xác nhận thông tin và tạo đơn hàng
- **Thanh toán thành công**: Đơn hàng được tạo, giỏ hàng được xóa, nhận xác nhận:
  - Thông báo "Đơn hàng #ID đã được tạo thành công"
  - Email xác nhận được gửi (nếu có)
  - Chuyển hướng vào trang "Đơn hàng thành công"
  - Hiển thị mã đơn hàng, tổng tiền, địa chỉ giao hàng
- **Thanh toán thất bại**: Thông báo lỗi chi tiết, giỏ hàng vẫn được giữ lại
- **Huỷ thanh toán**: Người dùng thoát khỏi trang checkout, quay lại giỏ hàng
- **Kiểm tra tồn kho lại**: Trước khi tạo đơn hàng, kiểm tra lại tồn kho từng sản phẩm
  - Nếu không đủ → thông báo, điều chỉnh số lượng hoặc xóa sản phẩm
- **In hóa đơn**: Người dùng in hóa đơn sau khi thanh toán thành công
  - Hiển thị thông tin đơn hàng, danh sách sản phẩm, tổng tiền
  - Nút print (in trình duyệt hoặc xuất PDF)

---

### 6.5. Biến cố liên quan đến Hồ sơ cá nhân (User):

- **Xem hồ sơ cá nhân**: Người dùng xem thông tin tài khoản của mình
- **Cập nhật thông tin cá nhân**: Người dùng thay đổi:
  - Họ tên
  - Email
  - Số điện thoại
- **Cập nhật thành công**: Thông tin được lưu, hiển thị thông báo "Thông tin cá nhân đã được cập nhật"
- **Cập nhật thất bại**: Thông báo lỗi (email đã tồn tại, email không hợp lệ, v.v.)
- **Đổi mật khẩu**: Người dùng nhập:
  - Mật khẩu hiện tại
  - Mật khẩu mới
  - Xác nhận mật khẩu mới
- **Đổi mật khẩu thành công**: Thông báo "Mật khẩu đã được cập nhật"
- **Đổi mật khẩu thất bại**: Thông báo lỗi (mật khẩu hiện tại sai, mật khẩu mới không khớp, v.v.)
- **Xem sổ địa chỉ**: Người dùng xem danh sách các địa chỉ đã lưu
- **Thêm địa chỉ mới**: Người dùng lưu một địa chỉ giao hàng mới
  - Nhập họ tên người nhận, số điện thoại
  - Nhập địa chỉ chi tiết, phường/xã, quận/huyện, tỉnh/thành phố
  - Có thể đặt làm mặc định
- **Thêm địa chỉ thành công**: Thông báo "Địa chỉ đã được thêm thành công"
- **Chỉnh sửa địa chỉ**: Người dùng cập nhật thông tin địa chỉ
- **Chỉnh sửa thành công**: Thông báo "Địa chỉ đã được cập nhật"
- **Xóa địa chỉ**: Người dùng xóa một địa chỉ
  - Không được xóa địa chỉ mặc định nếu là duy nhất → thông báo cảnh báo
- **Xóa thành công**: Thông báo "Địa chỉ đã được xóa"
- **Đặt làm mặc định**: Người dùng chọn một địa chỉ làm mặc định cho các lần mua hàng tiếp theo
- **Đặt mặc định thành công**: Thông báo "Địa chỉ đã được đặt làm mặc định"

---

### 6.6. Biến cố liên quan đến Đơn hàng (User):

- **Xem danh sách đơn hàng của tôi**: Người dùng xem tất cả đơn hàng đã đặt
- **Xem chi tiết đơn hàng**: Người dùng xem chi tiết một đơn hàng:
  - Mã đơn hàng
  - Ngày đặt
  - Danh sách sản phẩm (tên, số lượng, giá từng sản phẩm)
  - Tổng tiền
  - Trạng thái hiện tại
  - Địa chỉ giao hàng
  - Phương thức thanh toán
  - Ngày dự kiến giao hàng
- **Theo dõi trạng thái đơn hàng**: Người dùng xem trạng thái hiện tại:
  - pending (Chờ xác nhận)
  - processing (Đang xử lý)
  - shipping (Đang giao hàng)
  - delivered (Đã giao hàng)
  - cancelled (Đã hủy)
- **Huỷ đơn hàng**: Người dùng có thể huỷ đơn hàng nếu nó chưa được xác nhận hoặc đang xử lý
  - Xác nhận huỷ → Đơn hàng được cập nhật trạng thái → Thông báo "Đơn hàng đã được huỷ"
- **Tìm kiếm đơn hàng**: Người dùng tìm kiếm đơn hàng theo ID hoặc ngày

---

### 6.7. Biến cố liên quan đến thông báo (Notifications):

- **Thêm sản phẩm vào giỏ thành công**: Thông báo xanh "Đã thêm X sản phẩm vào giỏ"
- **Xóa sản phẩm khỏi giỏ**: Thông báo vàng "Đã xóa sản phẩm khỏi giỏ"
- **Giỏ hàng trống**: Cảnh báo "Giỏ hàng của bạn đang trống"
- **Sản phẩm bị xóa**: Cảnh báo "Sản phẩm đã bị xóa khỏi giỏ vì không còn tồn tại"
- **Tồn kho không đủ**: Cảnh báo "Số lượng không đủ, chỉ còn X sản phẩm"
- **Đơn hàng được tạo thành công**: Thông báo xanh "Đơn hàng #ID đã được tạo thành công"
- **Cập nhật trạng thái đơn hàng**: Thông báo "Trạng thái đơn hàng #ID đã được cập nhật" (nếu có)
- **Lỗi trong quá trình xử lý**: Thông báo đỏ lỗi chi tiết
- **Xác nhận trước khi xóa**: Hộp thoại xác nhận "Bạn có chắc chắn muốn xóa không?"

---

### 6.8. Biến cố liên quan đến dữ liệu (Data Events):

- **Kiểm tra kết nối CSDL**: Kiểm tra kết nối tới MySQL khi page load
  - Nếu lỗi: Hiển thị thông báo "Kết nối thất bại"
- **Chuẩn bị CSDL**: Tự động tạo bảng nếu chưa tồn tại (products, orders, users, addresses, categories)
- **Đồng bộ giỏ hàng**: Kiểm tra giỏ hàng giữa session PHP và localStorage JavaScript
- **Cập nhật giá sản phẩm**: Thông báo nếu giá thay đổi từ khi thêm vào giỏ
- **Cập nhật tồn kho tự động**: Tồn kho giảm khi đơn hàng được xác nhận
- **Xác minh email**: Gửi email xác nhận đơn hàng (nếu có)
- **Lưu vào localStorage**: Giỏ hàng được lưu vào localStorage để phục hồi khi F5

---

## 7. QUY TRÌNH MUA HÀNG CỦA USER:

### Quy trình chính:
1. Người dùng xem trang chủ hoặc sản phẩm
2. Tìm kiếm/Lọc sản phẩm theo danh mục
3. Xem chi tiết sản phẩm
4. Thêm vào giỏ hàng → Thông báo thành công
5. (Tùy chọn) Tiếp tục mua sắm
6. Xem giỏ hàng → Sửa số lượng → Xóa sản phẩm (nếu cần)
7. Nhấp "Thanh toán"
8. Điền thông tin giao hàng (hoặc chọn từ sổ địa chỉ)
9. Chọn phương thức thanh toán
10. Xem lại đơn hàng → Xác nhận
11. Thanh toán thành công → Nhận mã đơn hàng
12. Xem "Đơn hàng của tôi" → Theo dõi trạng thái

### Quy trình quản lý tài khoản:
1. Người dùng vào "Tài khoản" → "Profile"
2. Xem/Cập nhật thông tin cá nhân
3. Đổi mật khẩu
4. Quản lý sổ địa chỉ (thêm, sửa, xóa, đặt mặc định)
5. Xem "Đơn hàng của tôi"
6. Xem chi tiết từng đơn hàng → Theo dõi trạng thái
7. (Tùy chọn) Huỷ đơn hàng nếu chưa xử lý
8. In hóa đơn

---

**Ngày cập nhật:** 14/11/2025  
**Phiên bản:** 1.0  
**Loại:** User Interface
