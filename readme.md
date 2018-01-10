# Phân tích dữ liệu với sự hỗ trợ từ Google Analytics

# Demo: 
### [Google Analytics](https://ga-dev-tools.appspot.com/embed-api/)
## NHỚ KÍCH HOẠT API Analytics (Analytics API)
	https://console.developers.google.com/apis/library/analytics.googleapis.com/?project=fifth-jigsaw-179815
	
## Các trang quản lý cấu hình
### Trang chủ xem biểu đồ:
	https://analytics.google.com/analytics/web/?hl=vi&pli=1#embed/report-home/a112002191w166990537p167310680/
		
### Cấu hình trang Google Analytics: Cấu hình View (Test View)
	https://analytics.google.com/analytics/academy/course/6/unit/1/lesson/4
		
### Quản lý ứng dụng Google: Tạo các Credentials
	https://console.developers.google.com/apis/credentials?project=fifth-jigsaw-179815
		
#### Chú ý trong pha cấu hình Javascript (lấy dữ liệu để vẽ biểu đồ bằng Js):
1. Nếu dùng Js để lấy dữ liệu cần chọn Create Credentials -> OAuth client ID
2. Triển khai trên local thì không thể trỏ địa chỉ ảo được (thường lỗi domain), do vậy cần khai báo như sau: http://localhost:8080.
		For example, if your website is hosted on the domain example.com, make sure to set the following origin for your client ID http://example.com. 
		If you want to test your code locally, you'll need to add the origin for your local server as well, for example: http://localhost:8080.
3. Do đó khi chạy cần chạy ở chế độ php artisan serve (chưa biết fix mà không cần php artisan serve trên Js)
#### Chú ý trong phần cấu hình bằng PHP
	Cấu hình phần này đơn giản hơn, chỉ cần lấy file JSON theo video
		
## Vẽ biểu đồ
### Javascript:	
#### Nếu vẽ dựa trên js: cần tạo xác thực: lấy client ID
	Click Create credentials > OAuth client ID and select the appropriate Application type.
#### Hướng dẫn: tự vẽ sẵn hoặc lấy dữ liệu vẽ từ bên thứ 3
	https://developers.google.com/analytics/devguides/reporting/embed/v1/getting-started
	https://ga-dev-tools.appspot.com/embed-api/
		
### Import bằng PHP để lấy các thuộc tính sau đó sẽ tiến hành vẽ đồ thì bằng JS
	Sinh file json sau đó import vào ứng dụng sẽ lấy ứng dụng
	https://www.youtube.com/watch?v=3ll-TV7TcMs
## Demo:
### Hãy vào https://ga-dev-tools.appspot.com/embed-api/ xem demo trước khi chạy code sẽ dễ hiểu hơn
	
### /data: lấy dữ liệu từ PHP
### http://local:8000/demo: tự vẽ biểu đồ từ sự hỗ trợ Google Analytics
### http://local:8000/thirdparty: vẽ biểu đồ từ việc nhận dữ liệu và vẽ qua thư viện Js
	
		
		

	