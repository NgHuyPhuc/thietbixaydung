<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newinfos')->delete();
        $newinfos = [
            [
                'id' => '1',
                'title' => 'CHO THUÊ XE NÂNG ĐIỆN',
                'image' => 'test.jpg',
                'content' => '<h2>Xe n&acirc;ng h&agrave;ng chạy bằng điện l&agrave; g&igrave;?</h2>

                <p><strong>Xe n&acirc;ng h&agrave;ng chạy bằng điện</strong>&nbsp;l&agrave; loại xe n&acirc;ng hoạt động bằng b&igrave;nh ắc quy điện. Với sự ph&aacute;t triển vượt trội của c&ocirc;ng nghệ hiện nay, xe n&acirc;ng h&agrave;ng bằng điện đ&oacute;ng vai tr&ograve; v&ocirc; c&ugrave;ng quan trọng trong ng&agrave;nh c&ocirc;ng nghiệp bốc, xếp, vận chuyển.</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-1.jpg" /></p>
                
                <p>Xe n&acirc;ng h&agrave;ng điện hoạt động bằng b&igrave;nh nhi&ecirc;n liệu ắc quy</p>
                
                <p>Với độ phủ s&oacute;ng kh&ocirc;ng thua k&eacute;m g&igrave; xe n&acirc;ng chạy bằng dầu, KHF đ&atilde; v&agrave; đang cung cấp dịch vụ&nbsp;<strong><a href="https://kfh.com.vn/cho-thue-xe-nang-hang/">cho thu&ecirc; xe n&acirc;ng h&agrave;ng</a></strong>&nbsp;tr&ecirc;n mọi miền Tổ quốc &ndash; gi&uacute;p c&aacute;c doanh nghiệp c&oacute; thể tối ưu chi ph&iacute; trong hoạt động kinh doanh của m&igrave;nh.</p>
                
                <h2>C&ocirc;ng dụng xe n&acirc;ng h&agrave;ng bằng điện</h2>
                
                <p><strong>Xe n&acirc;ng h&agrave;ng bằng điện</strong>&nbsp;được sử dụng để vận chuyển h&agrave;ng h&oacute;a, n&acirc;ng hạ từ container v&agrave;o kho, ngược lại, hoặc di chuyển trong kho tại c&aacute;c nh&agrave; m&aacute;y thực phẩm, linh kiện điện tử, kho xưởng sản xuất may mặc, si&ecirc;u thị&hellip;</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-4.jpg" /></p>
                
                <p>Sử dụng xe n&acirc;ng điện tại c&aacute;c khu c&ocirc;ng nghiệp đ&atilde; gi&uacute;p qu&aacute; tr&igrave;nh vận chuyển nhanh ch&oacute;ng hơn đ&aacute;ng kể, hiệu quả c&ocirc;ng việc tốt hơn.&nbsp;Thay thế cho sức người, gi&uacute;p giảm lượng nh&acirc;n c&ocirc;ng trong những kh&acirc;u vất vả đ&ograve;i hỏi sức lực cao, tiết kiệm thời gian v&agrave; chi ph&iacute; rất nhiều cho doanh nghiệp.</p>
                
                <h2>Ưu điểm của xe n&acirc;ng h&agrave;ng bằng điện</h2>
                
                <p>Xe n&acirc;ng h&agrave;ng bằng điện sở hữu nhiều ưu điểm vượt trội như:</p>
                
                <h3>Tiết kiệm chi ph&iacute;</h3>
                
                <p>Chi ph&iacute; vận h&agrave;nh xe n&acirc;ng h&agrave;ng bằng điện chỉ bằng 1/3 &ndash; 1/6 so với sử dụng xe n&acirc;ng dầu c&ugrave;ng hạng. Giải ph&aacute;p th&ocirc;ng minh gi&uacute;p tối ưu chi ph&iacute;, m&agrave; vẫn đảm bảo hiệu suất kh&acirc;u vận chuyển h&agrave;ng h&oacute;a.</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-2.jpg" /></p>
                
                <p>Chi ph&iacute; vận h&agrave;nh của xe n&acirc;ng điện tương đối thấp</p>
                
                <h3>Sử dụng trong những kh&ocirc;ng gian hẹp</h3>
                
                <p>Thiết kế nhỏ gọn v&agrave; linh hoạt, dễ d&agrave;ng điều khiển xe luồn l&aacute;ch v&agrave; n&acirc;ng hạ h&agrave;ng h&oacute;a trong những khu vực, lối đi hẹp của nh&agrave; kho. Đ&acirc;y l&agrave; điều m&agrave; c&aacute;c loại xe n&acirc;ng h&agrave;ng bằng dầu k&iacute;ch thước lớn kh&oacute; c&oacute; thể l&agrave;m được.</p>
                
                <h3>Ph&ugrave; hợp cho những kh&ocirc;ng gian k&iacute;n</h3>
                
                <p>Xe n&acirc;ng h&agrave;ng bằng điện th&iacute;ch hợp sử dụng trong m&ocirc;i trường l&agrave;m việc k&iacute;n hay y&ecirc;u cầu sạch sẽ. Hoạt động rất y&ecirc;n tĩnh, kh&ocirc;ng &ocirc; nhiễm tiếng ồn, sử dụng điện n&ecirc;n kh&ocirc;ng tạo ra bụi bẩn hay muội than, kh&ocirc;ng g&acirc;y ảnh hưởng tới h&agrave;ng h&oacute;a trong c&aacute;c kho lưu trữ.</p>
                
                <h3>C&aacute;ch vận h&agrave;nh xe đơn giản</h3>
                
                <p>C&aacute;c d&ograve;ng xe n&acirc;ng điện vận h&agrave;nh v&ocirc; c&ugrave;ng đơn giản. Mọi th&ocirc;ng số kỹ thuật của xe đều được hiển thị r&otilde; tr&ecirc;n m&agrave;n h&igrave;nh LCD, c&ugrave;ng n&uacute;t bấm v&agrave; tay điều khiển rất dễ kiểm so&aacute;t, tạo điều kiện thuận lợi cho người vận h&agrave;nh.</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-3.jpg" /></p>
                
                <p>Xe n&acirc;ng h&agrave;ng bằng điện c&oacute; c&aacute;ch vận h&agrave;nh rất đơn giản</p>
                
                <h3>Gi&uacute;p bảo vệ m&ocirc;i trường</h3>
                
                <p>Ưu điểm lớn nhất của d&ograve;ng xe n&acirc;ng điện so với những d&ograve;ng sử dụng động cơ đ&ocirc;́t trong như d&acirc;̀u, gas, xăng ch&iacute;nh l&agrave; kh&ocirc;ng xả kh&iacute; thải. Xe n&acirc;ng điện hoạt động kh&ocirc;ng g&acirc;y ra tiếng ồn, kh&ocirc;ng tạo ra kh&iacute; thải n&ecirc;n khi sử dụng th&acirc;n thiện với m&ocirc;i trường, kh&ocirc;ng g&acirc;y &ocirc; nhiễm v&agrave; độc hại.</p>
                
                <p>Ch&iacute;nh v&igrave; vậy, rất th&iacute;ch hợp để sử dụng trong c&aacute;c m&ocirc;i trường l&agrave;m việc như kho lạnh, kho bảo quản thực phẩm, thuốc&hellip; y&ecirc;u cầu vệ sinh sạch sẽ.</p>
                
                <h2>B&aacute;o gi&aacute; cho thu&ecirc; xe n&acirc;ng điện tại KFH</h2>
                
                <p>Chi ph&iacute; để đầu tư mua mới xe n&acirc;ng điện kh&ocirc;ng hề rẻ, thiết bị c&agrave;ng mới, hiện đại th&igrave; gi&aacute; c&agrave;ng cao. Nhiều doanh nghiệp chỉ c&oacute; nhu cầu sử dụng theo m&ugrave;a vụ, nếu mua một loạt xe thời gian kh&ocirc;ng sử dụng rất l&atilde;ng ph&iacute;. Tốn th&ecirc;m tiền cho hoạt động bảo dưỡng bảo tr&igrave; thường xuy&ecirc;n.</p>
                
                <p>=&gt; V&igrave; vậy, nhiều chủ đầu tư lựa chọn phương &aacute;n thu&ecirc; xe n&acirc;ng, tối ưu chi ph&iacute; m&agrave; vẫn đ&aacute;p ứng được nhu cầu.</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-4.jpg" /></p>
                
                <p>Gi&aacute;&nbsp;<strong>thu&ecirc; xe n&acirc;ng h&agrave;ng điện</strong>&nbsp;phụ thuộc v&agrave;o nhiều yếu tố kh&aacute;c nhau như k&iacute;ch cỡ, c&ocirc;ng suất, trọng tải hay thương hiệu&hellip; Để nhận b&aacute;o gi&aacute; ch&iacute;nh x&aacute;c nhất, qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng li&ecirc;n hệ tới KFH qua&nbsp;<strong>hotline 0912 86 2015</strong>.</p>
                
                <h2>KFH &ndash; chuy&ecirc;n cho thu&ecirc; xe n&acirc;ng điện ch&iacute;nh h&atilde;ng</h2>
                
                <p>Tr&ecirc;n thị trường hiện c&oacute; rất nhiều đơn vị cung cấp dịch vụ&nbsp;<strong>cho thu&ecirc; xe n&acirc;ng điện</strong>. Tuy nhi&ecirc;n, để chọn được đơn vị uy t&iacute;n, đảm bảo chất lượng thiết bị kh&ocirc;ng hề dễ d&agrave;ng. Qu&yacute; kh&aacute;ch c&oacute; thể tham khảo dịch vụ tại KFH &ndash; c&ocirc;ng ty số 1 về&nbsp;<strong><a href="https://kfh.com.vn/">cho thu&ecirc; m&aacute;y m&oacute;c x&acirc;y dựng</a></strong>&nbsp;ch&iacute;nh h&atilde;ng nội địa Nhật.</p>
                
                <p><img alt="Cho thuê xe nâng điện giá tốt - Thuê xe nâng hàng bằng điện | KFH" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-hang-bang-dien-5.jpg" /></p>
                
                <p>KFH &ndash; Địa chỉ uy t&iacute;n cho thu&ecirc; xe n&acirc;ng h&agrave;ng bằng điện ch&iacute;nh h&atilde;ng</p>
                
                <p><strong>KFH</strong>&nbsp;sở hữu hệ thống chi nh&aacute;nh ở cả ba miền đất nước, với số lượng lớn xe n&acirc;ng h&agrave;ng, lu&ocirc;n sẵn s&agrave;ng phục vụ qu&yacute; doanh nghiệp d&ugrave; ở bất kỳ đ&acirc;u. Cam kết cung cấp:</p>
                
                <p>&ndash; C&aacute;c d&ograve;ng xe n&acirc;ng chất lượng, được kiểm định chất lượng thường xuy&ecirc;n, c&aacute;c ti&ecirc;u chuẩn gắt gao đến từ chuy&ecirc;n gia Nhật Bản.</p>
                
                <p>&ndash; Xe n&acirc;ng lu&ocirc;n được đầu tư đổi những mẫu đời mới nhất, cho trải nghiệm tuyệt vời v&agrave; hiện đại hơn.</p>
                
                <p>&ndash; Với đội ngũ tư vấn v&agrave; kỹ thuật được đ&agrave;o tạo b&agrave;i bản, chuy&ecirc;n nghiệp, kinh nghiệm d&agrave;y dặn trong lĩnh vực xe n&acirc;ng. Hỗ trợ kh&aacute;ch h&agrave;ng tốt nhất khi tới trải nghiệm, thu&ecirc; xe n&acirc;ng điện.</p>
                
                <p>&ndash; Hỗ trợ vận chuyển tận nơi, ch&iacute;nh s&aacute;ch bảo dưỡng đầy đủ, đảm bảo chất lượng xe tốt nhất trong qu&aacute; tr&igrave;nh l&agrave;m việc.</p>
                
                <p>&ndash; Lu&ocirc;n sẵn s&agrave;ng c&oacute; mặt xử l&yacute; nhanh ch&oacute;ng khi c&oacute; sự cố, kh&ocirc;ng để ảnh hưởng đến tiến độ c&ocirc;ng việc của doanh nghiệp.</p>
                
                <p>KFH cung cấp dịch vụ cho thu&ecirc; xe n&acirc;ng h&agrave;ng tại c&aacute;c tỉnh th&agrave;nh phố:&nbsp;<a href="https://kfh.com.vn/cho-thue-xe-nang-tphcm/">thu&ecirc; xe n&acirc;ng tphcm</a>,&nbsp;<a href="https://kfh.com.vn/cho-thue-xe-nang-ha-noi/">thu&ecirc; xe n&acirc;ng h&agrave; nội</a>,&nbsp;<a href="https://kfh.com.vn/cho-thue-xe-nang-tai-hai-phong/">cho thu&ecirc; xe n&acirc;ng tại hải ph&ograve;ng</a>,&nbsp;<a href="https://kfh.com.vn/thue-xe-nang-binh-duong/">cho thu&ecirc; xe n&acirc;ng b&igrave;nh dương</a>, &hellip;</p>
                
                <p>Tr&ecirc;n đ&acirc;y l&agrave; th&ocirc;ng chi tiết về&nbsp;<strong>dịch vụ thu&ecirc; xe n&acirc;ng điện</strong>, hy vọng hữu &iacute;ch với qu&yacute; doanh nghiệp. Nếu c&oacute; nhu cầu sử dụng dịch vụ thu&ecirc; xe n&acirc;ng h&agrave;ng bằng điện, li&ecirc;n hệ ngay tới KFH qua th&ocirc;ng tin dưới đ&acirc;y để được tư vấn, hỗ trợ nhanh nhất.</p>
                
                <p><strong>TRUNG T&Acirc;M M&Aacute;Y X&Acirc;Y DỰNG KFH MIỀN BẮC</strong></p>
                
                <ul>
                    <li>Địa chỉ: Km24 + 300 Đại Lộ Thăng Long, H&agrave; Nội</li>
                    <li>Số điện thoại: 0912.86.2015</li>
                    <li>Email: anhbn@kfh.com.vn</li>
                    <li>Website: https://kfh.com.vn</li>
                </ul>
                
                <p><strong>CHI NH&Aacute;NH MIỀN TRUNG</strong></p>
                
                <ul>
                    <li>Địa chỉ: Th&ocirc;n Trung An, x&atilde; B&igrave;nh Thạnh, huyện B&igrave;nh Sơn, tỉnh Quảng Ng&atilde;i</li>
                </ul>
                
                <p><strong>CHI NH&Aacute;NH MIỀN NAM</strong></p>
                
                <ul>
                    <li>Địa chỉ: Số 384, đường DT743A, khu phố Trung Thắng, p B&igrave;nh Thắng, tx Dĩ An, B&igrave;nh Dương</li>
                </ul>',
                'level' => 1,
            ],
            [
                'id' => '2',
                'title' => 'THUÊ XE NÂNG NGƯỜI',
                'image' => 'test.jpg',
                'content' => '<h2>Xe n&acirc;ng người l&agrave; g&igrave;?</h2>

                <p><a href="https://kfh.com.vn/xe-nang-nguoi-lam-viec-tren-cao/"><strong>Xe n&acirc;ng người l&agrave;m việc tr&ecirc;n cao</strong></a>&nbsp;l&agrave; loại xe cơ giới chuy&ecirc;n d&ugrave;ng để n&acirc;ng hạ v&agrave; di chuyển người đến vị tr&iacute; l&agrave;m việc tr&ecirc;n cao, kh&oacute; tiếp cận. Tại Việt Nam, xe n&acirc;ng người c&ograve;n được biết đến như thang n&acirc;ng người, xe n&acirc;ng người tự h&agrave;nh, xe n&acirc;ng tự h&agrave;nh, thiết bị n&acirc;ng người di động&hellip;</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/cho-thue-xe-nang-nguoi-1.png" style="height:450px; width:600px" /></p>
                
                <p>Xe n&acirc;ng người c&oacute; độ an to&agrave;n cao, sử dụng dễ d&agrave;ng v&agrave; thuận tiện trong c&ocirc;ng việc, thường được d&ugrave;ng thay cho gi&agrave;n gi&aacute;o hoặc thang truyền thống, khi cần l&agrave;m việc tr&ecirc;n cao.</p>
                
                <h2>C&aacute;c loại xe n&acirc;ng người phổ biến v&agrave; ứng dụng</h2>
                
                <p>Hiện nay, tr&ecirc;n thị trường c&oacute; đa dạng loại xe n&acirc;ng người, với thiết kế, t&iacute;nh năng ph&ugrave; hợp cho những c&ocirc;ng việc kh&aacute;c nhau. C&ugrave;ng t&igrave;m hiểu 4 loại phổ biến nhất hiện nay v&agrave; c&aacute;c trường hợp ứng dụng cụ thể:</p>
                
                <h3>Xe n&acirc;ng người cắt k&eacute;o</h3>
                
                <p><a href="https://kfh.com.vn/vi/san-pham/xe-nang-nguoi-cat-keo-sv06b/"><strong>Xe n&acirc;ng người cắt k&eacute;o</strong></a>&nbsp;l&agrave; loại xe n&acirc;ng người nhỏ gọn, chiều cao trung b&igrave;nh từ 5 &ndash; 20m. D&ograve;ng xe n&agrave;y c&oacute; kết cấu chắc chắn, dễ d&agrave;ng vận h&agrave;nh v&agrave; di chuyển, th&ugrave;ng thao t&aacute;c rộng, tải trọng của giỏ lớn. Xe n&acirc;ng dạng cắt k&eacute;o l&agrave; lựa chọn l&yacute; tưởng của c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng, xưởng sản xuất,&hellip;</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-nguoi-cat-keo-1.jpg" style="height:450px; width:600px" /></p>
                
                <p>Xe n&acirc;ng người cắt k&eacute;o dễ bảo dưỡng hay sửa chữa. Tuy nhi&ecirc;n, chỉ c&oacute; thể n&acirc;ng người l&ecirc;n theo phương thẳng đứng. Trong khi một số loại xe n&acirc;ng kh&aacute;c c&oacute; thể mở rộng s&agrave;n v&agrave; tầm với l&agrave;m việc l&ecirc;n đến 1m.</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/cho-thue-xe-nang-nguoi-2.png" style="height:377px; width:600px" /></p>
                
                <p>Động cơ thường sử dụng cho xe n&acirc;ng cắt k&eacute;o l&agrave; động cơ điện, với ưu điểm ch&iacute;nh l&agrave; vận h&agrave;nh &ecirc;m &aacute;i, th&acirc;n thiện với m&ocirc;i trường. Tải trọng n&acirc;ng của xe trung b&igrave;nh khoảng 200Kg.</p>
                
                <p>Xe n&acirc;ng cắt k&eacute;o thường được sử dụng khi:</p>
                
                <p>&ndash; Bảo dưỡng nh&agrave; xưởng</p>
                
                <p>&ndash; Lắp r&aacute;p xưởng c&oacute; diện t&iacute;ch nhỏ</p>
                
                <p>&ndash; Lắp điều h&ograve;a ống gi&oacute;</p>
                
                <p>&ndash; Trang tr&iacute; c&aacute;c sự kiện</p>
                
                <p>&ndash; Vệ sinh cửa k&iacute;nh nh&agrave; cao tầng</p>
                
                <p>&ndash; Một v&agrave;i c&ocirc;ng việc kh&aacute;c thay thế cho thang hay d&agrave;n gi&aacute;o truyền thống.</p>
                
                <p>&gt;&gt;&gt; T&igrave;m hiểu th&ecirc;m:&nbsp;<a href="https://kfh.com.vn/vi/san-pham/xe-nang-nguoi-cat-keo-gs-2646/">Xe n&acirc;ng người genie</a></p>
                
                <h3>Xe n&acirc;ng người Boom Lift</h3>
                
                <p><strong>Xe n&acirc;ng người Boom Lift</strong>&nbsp;l&agrave; loại xe rất phổ biến trong những c&ocirc;ng tr&igrave;nh x&acirc;y dựng lớn. D&ograve;ng xe n&agrave;y c&oacute; 2 dạng cấu tr&uacute;c ch&iacute;nh l&agrave; dạng S-Boom v&agrave; Z-Boom.</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/xe-nang-nguoi-boom-lift.jpg" style="height:449px; width:600px" /></p>
                
                <p>Với k&iacute;ch thước lớn hơn, kết cấu phức tạp,&nbsp;<strong>xe n&acirc;ng Boom Lift</strong>&nbsp;mang lại hiệu suất l&agrave;m việc cao hơn, tải trọng n&acirc;ng l&ecirc;n đến 500Kg. Tầm với ngang của xe l&ecirc;n tới v&agrave;i chục m&eacute;t v&agrave; chiều cao c&oacute; thể l&ecirc;n tới cả trăm m&eacute;t.</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/cho-thue-xe-nang-nguoi-3.png" style="height:450px; width:600px" /></p>
                
                <p>Một số trường hợp n&ecirc;n sử dụng xe n&acirc;ng người Boom Lift:</p>
                
                <p>&ndash; Lắp r&aacute;p nh&agrave; xưởng</p>
                
                <p>&ndash; Sửa m&aacute;i nh&agrave;, sơn nh&agrave;</p>
                
                <p>&ndash; Bảo tr&igrave; c&aacute;c hệ thống tr&ecirc;n cao</p>
                
                <p>&ndash; Cắt tỉa c&acirc;y ở khu đ&ocirc; thị</p>
                
                <p>&ndash; Vệ sinh t&ograve;a nh&agrave;, lắp đặt k&iacute;nh cửa&hellip;</p>
                
                <h3>Xe n&acirc;ng người mini</h3>
                
                <p><strong>Xe n&acirc;ng người mini</strong>&nbsp;c&oacute; thiết kế nhỏ gọn, tối ưu về thể t&iacute;ch trọng lượng. Nhưng vẫn đảm bảo chức năng v&agrave; c&aacute;c yếu tố về hiệu quả, hay độ an to&agrave;n. D&ograve;ng xe n&agrave;y ph&ugrave; hợp với những nh&agrave; xưởng c&oacute; diện t&iacute;ch nhỏ hẹp, gi&uacute;p thao t&aacute;c dễ d&agrave;ng, hoạt động linh hoạt, điều khiển dễ d&agrave;ng.</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/cho-thue-xe-nang-nguoi-4.png" style="height:1067px; width:600px" /></p>
                
                <p>Một số c&ocirc;ng việc n&ecirc;n sử dụng xe n&acirc;ng người mini:</p>
                
                <p>&ndash; L&agrave;m việc, bốc xếp h&agrave;ng trong kh&ocirc;ng gian chật hẹp</p>
                
                <p>&ndash; C&ocirc;ng việc trong nh&agrave;</p>
                
                <p>&ndash; Bảo tr&igrave;, bảo dưỡng</p>
                
                <p>&ndash; Vệ sinh nh&agrave; cửa</p>
                
                <p>&ndash; C&aacute;c c&ocirc;ng việc tr&ecirc;n cao</p>
                
                <h2>B&aacute;o gi&aacute; cho thu&ecirc; xe n&acirc;ng người mới nhất tại KFH</h2>
                
                <p>Xe n&acirc;ng người c&oacute; nhiều mẫu m&atilde; kh&aacute;c nhau, n&ecirc;n kh&ocirc;ng c&oacute; mức gi&aacute; ch&iacute;nh x&aacute;c của dịch vụ cho thu&ecirc; xe n&acirc;ng người. Một số yếu tố c&oacute; thể ảnh hưởng tới gi&aacute; thu&ecirc; l&agrave; chi ph&iacute; vận chuyển, chiều cao của xe, thương hiệu, loại xe, số lượng xe thu&ecirc;, thời gian, độ mới,&hellip;</p>
                
                <p><img alt="KFH - Đơn vị cho thuê thiết bị xây dựng uy tín" src="https://kfh.com.vn/wp-content/uploads/2021/04/cach-su-dung-xe-nang-kfh.jpg" style="height:400px; width:600px" /></p>
                
                <p>Ch&iacute;nh v&igrave; vậy, để nhận b&aacute;o gi&aacute; ch&iacute;nh x&aacute;c nhất, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i qua<strong>&nbsp;hotline 0912 86 2015</strong>, nhận hỗ trợ tư vấn v&agrave; chọn được loại xe ph&ugrave; hợp với nhu cầu sử dụng của c&ocirc;ng ty.</p>
                
                <h2>KFH cho thu&ecirc; xe n&acirc;ng người chất lượng chuẩn Nhật</h2>
                
                <p><strong>KFH</strong>&nbsp;l&agrave; đơn vị h&agrave;ng đầu chuy&ecirc;n cung cấp dịch vụ&nbsp;<strong><a href="https://kfh.com.vn/">cho thu&ecirc; thiết bị x&acirc;y dựng</a></strong>&nbsp;tại Việt Nam hiện nay. L&agrave; đơn vị đối t&aacute;c uy t&iacute;n của nhiều doanh nghiệp lớn, từng cung cấp dịch vụ cho dự &aacute;n Nh&agrave; m&aacute;y LG, Nh&agrave; m&aacute;y Nestle, KCN Thăng Long 2, Bệnh viện Việt Ph&aacute;p (H&agrave; Nội), FLC Hạ Long&hellip; G&oacute;p phần kh&ocirc;ng nhỏ gi&uacute;p ho&agrave;n th&agrave;nh nhanh ch&oacute;ng tiến độ c&ocirc;ng việc, x&acirc;y dựng nhiều kho b&atilde;i, nh&agrave; xưởng cho những c&ocirc;ng ty lớn.</p>
                
                <p><img alt="Đơn vị cho thuê xe nâng người, xe boom, xe cắt kéo | KFH báo giá 2023" src="https://kfh.com.vn/wp-content/uploads/2022/11/cho-thue-xe-nang-nguoi-5.png" style="height:906px; width:600px" /></p>
                
                <p>KFH với hệ thống hơn 300 thiết bị n&acirc;ng người lớn nhỏ, xe đều c&oacute; sẵn trong kho v&agrave; sẵn s&agrave;ng xuất kho bất cứ khi n&agrave;o kh&aacute;ch h&agrave;ng c&oacute; nhu cầu. Với hệ thống 3 chi nh&aacute;nh tại H&agrave; Nội, Quảng Ng&atilde;i v&agrave; B&igrave;nh Dương, cho thu&ecirc; xe n&acirc;ng tr&ecirc;n to&agrave;n quốc nhanh ch&oacute;ng, chất lượng.</p>
                
                <p>&ndash; Chuy&ecirc;n cung cấp c&aacute;c d&ograve;ng xe n&acirc;ng người đa dạng (cho thu&ecirc; xe boom, cho thu&ecirc; xe cắt k&eacute;o, xe n&acirc;ng kiểu X, kiểu Z,..).</p>
                
                <p>&ndash; Xe lu&ocirc;n được bảo tr&igrave;, kiểm tra chất lượng thường xuy&ecirc;n</p>
                
                <p>&ndash; Kiểm so&aacute;t chất lượng theo ti&ecirc;u chuẩn Nhật Bản, lu&ocirc;n duy tr&igrave; khả năng vận h&agrave;nh v&agrave; hiệu quả như mới.</p>
                
                <p>&ndash; Tại KFH, đội ngũ nh&acirc;n vi&ecirc;n kỹ thuật đều l&agrave; những người c&oacute; tay nghề cao, nhiều kinh nghiệm.</p>
                
                <p>&ndash; Li&ecirc;n tục cập nhật kiến thức trong ng&agrave;nh, lu&ocirc;n mang tới cho kh&aacute;ch h&agrave;ng chất lượng dịch vụ tốt nhất.</p>
                
                <p>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href="https://kfh.com.vn/cho-thue-xe-nang-nguoi-tai-dong-nai/">Cho thu&ecirc; xe n&acirc;ng người tại đồng nai</a></p>
                
                <p>Tr&ecirc;n đ&acirc;y l&agrave; to&agrave;n bộ th&ocirc;ng tin về dịch vụ&nbsp;<strong>cho thu&ecirc; xe n&acirc;ng người</strong>&nbsp;tại KFH. Nếu qu&yacute; kh&aacute;ch c&oacute; nhu cầu thu&ecirc; xe, vui l&ograve;ng li&ecirc;n hệ theo th&ocirc;ng tin dưới đ&acirc;y để được tư vấn v&agrave; b&aacute;o gi&aacute; dịch vụ ch&iacute;nh x&aacute;c nhất.</p>
                
                <p><strong>TRUNG T&Acirc;M M&Aacute;Y X&Acirc;Y DỰNG KFH MIỀN BẮC</strong></p>
                
                <ul>
                    <li>Địa chỉ: Km24 + 300 Đại Lộ Thăng Long, H&agrave; Nội</li>
                    <li>Số điện thoại: 0912.86.2015</li>
                    <li>Email: anhbn@kfh.com.vn</li>
                    <li>Website: https://kfh.com.vn</li>
                </ul>
                
                <p><strong>CHI NH&Aacute;NH MIỀN TRUNG</strong></p>
                
                <ul>
                    <li>Địa chỉ: Th&ocirc;n Trung An, x&atilde; B&igrave;nh Thạnh, huyện B&igrave;nh Sơn, tỉnh Quảng Ng&atilde;i</li>
                </ul>
                
                <p><strong>CHI NH&Aacute;NH MIỀN NAM</strong></p>
                
                <ul>
                    <li>Địa chỉ: Số 384, đường DT743A, khu phố Trung Thắng, p B&igrave;nh Thắng, tx Dĩ An, B&igrave;nh Dương</li>
                </ul>',
                'level' => 1,
            ],
            [
                'id' => '3',
                'title' => 'CHO THUÊ XE NÂNG BÌNH DƯƠNG',
                'image' => 'test.jpg',
                'content' => 'CHO THUÊ XE NÂNG BÌNH DƯƠNG',
                'level' => 1,
            ],
            [
                'id' => '4',
                'title' => 'CHO THUÊ XE NÂNG TPHCM',
                'image' => 'test.jpg',
                'content' => 'CHO THUÊ XE NÂNG TPHCM',
                'level' => 1,
            ],
            [
                'id' => '5',
                'title' => 'CHO THUÊ XE NÂNG HÀ NỘI',
                'image' => 'test.jpg',
                'content' => 'CHO THUÊ XE NÂNG HÀ NỘI',
                'level' => 1,
            ],
            [
                'id' => '6',
                'title' => 'CHO THUÊ XE NÂNG HẢI PHÒNG',
                'image' => 'test.jpg',
                'content' => 'CHO THUÊ XE NÂNG HẢI PHÒNG',
                'level' => 1,
            ],
            [
                'id' => '7',
                'title' => 'Công ty cho thuê xe nâng hàng 3 tấn giá rẻ tại Hà Nội',
                'image' => 'cho-thue-xe-nang-hang-3-tan-4-300x200 (1).jpg',
                'content' => '<h2><strong>Khi n&agrave;o n&ecirc;n thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn?</strong></h2>

                <p>C&aacute;c d&ograve;ng xe n&acirc;ng h&agrave;ng được sử dụng kh&aacute; phổ biến trong c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng, kho b&atilde;i, cảng biển, si&ecirc;u thị&hellip; để c&oacute; thể n&acirc;ng được khối lượng h&agrave;ng lớn gi&uacute;p tăng năng suất, hiệu quả trong c&ocirc;ng việc.&nbsp;</p>
                
                <p>Tuy nhi&ecirc;n những thiết bị n&acirc;ng h&agrave;ng c&oacute; gi&aacute; trị kh&aacute; cao, rất cần thiết trong qu&aacute; tr&igrave;nh vận chuyển h&agrave;ng h&oacute;a trong kho xưởng, xuất nhập khẩu h&agrave;ng h&oacute;a.&nbsp; Để c&oacute; thể x&aacute;c định được n&ecirc;n thu&ecirc; hay mua mới th&igrave; c&ograve;n phải xem x&eacute;t nhiều yếu tố.&nbsp;</p>
                
                <p><img alt="cho thuê xe nâng hàng 3 tấn" src="https://kfh.com.vn/wp-content/uploads/2023/09/cho-thue-xe-nang-hang-3-tan-1.jpg" style="height:600px; width:800px" /></p>
                
                <p>&nbsp;</p>
                
                <p>Nếu bạn cần sử dụng trong một thời gian d&agrave;i, hoạt động với c&ocirc;ng suất lớn th&igrave; tốt nhất l&agrave; n&ecirc;n mua xe n&acirc;ng mới sẽ gi&uacute;p thuận tiện hơn trong qu&aacute; tr&igrave;nh sử dụng. Tuy nhi&ecirc;n, nếu bạn chỉ cần sử dụng một v&agrave;i thời điểm trong tuần hay trong th&aacute;ng th&igrave; thu&ecirc; xe n&acirc;ng sẽ l&agrave; giải ph&aacute;p kinh tế gi&uacute;p bạn tiết kiệm chi ph&iacute;.</p>
                
                <p>Việc mua một chiếc xe n&acirc;ng mới sẽ ti&ecirc;u tốn khoảng 300 &ndash; 500 triệu đồng hoặc với những d&ograve;ng m&aacute;y c&oacute; c&ocirc;ng suất lớn hơn th&igrave; gi&aacute; sẽ c&ograve;n cao hơn. Do đ&oacute;, nếu chi ra một khoản tiền lớn trong thời điểm kinh tế kh&oacute; khăn hay kh&ocirc;ng đủ điều kiện t&agrave;i ch&iacute;nh sẽ cần phải c&acirc;n nhắc thật kỹ.</p>
                
                <p>Trong thời gian n&agrave;y, nhu cầu thu&ecirc; xe n&acirc;ng h&agrave;ng đang được nhiều doanh nghiệp lựa chọn để giảm bớt chi ph&iacute;. Đặc biệt, gi&aacute; cho thu&ecirc; xe n&acirc;ng hiện nay cũng kh&ocirc;ng qu&aacute; cao, đặc biệt nếu thu&ecirc; trong thời gian d&agrave;i bạn h&atilde;y trao đổi với b&ecirc;n cho thu&ecirc; để được mức gi&aacute; tốt nhất.</p>
                
                <h2><strong>Những lưu &yacute; khi thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn</strong></h2>
                
                <p>Nếu bạn đang c&oacute;&nbsp; &yacute; định&nbsp;<a href="https://kfh.com.vn/san-pham/xe-nang-hang-tcm-3-tan-fhd30t3-dau/">thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn</a>&nbsp;th&igrave; đừng bỏ qua những lưu &yacute; dưới đ&acirc;y:</p>
                
                <ul>
                    <li><strong>Lựa chọn thương hiệu uy t&iacute;n</strong>: C&aacute;c d&ograve;ng xe n&acirc;ng h&agrave;ng đến từ nhiều thương hiệu kh&aacute;c nhau do đ&oacute; bạn h&atilde;y lựa chọn những thương hiệu uy t&iacute;n, nổi tiếng để đảm bảo hiệu suất c&ocirc;ng việc trong qu&aacute; tr&igrave;nh sử dụng.</li>
                    <li><strong>Được đảm bảo an to&agrave;n trong qu&aacute; tr&igrave;nh sử dụng</strong>: An to&agrave;n l&agrave; một trong những ti&ecirc;u ch&iacute; cực kỳ quan trọng khi thu&ecirc; xe n&acirc;ng h&agrave;ng. Điều n&agrave;y phải c&oacute; sự cam kết giữa b&ecirc;n cho thu&ecirc; v&agrave; b&ecirc;n thu&ecirc; để tr&aacute;nh t&igrave;nh trạng xảy ra sự cố v&agrave; x&aacute;c định được tr&aacute;ch nhiệm thuộc về ai.</li>
                    <li><strong>Được bảo dưỡng, kiểm định theo định kỳ</strong>: Xe cần phải được bảo dưỡng thường xuy&ecirc;n, kiểm tra v&agrave; sửa chữa nếu hỏng h&oacute;c v&agrave; đảm bảo được kh&ocirc;ng gặp bất cứ vấn đề g&igrave;.</li>
                    <li><strong>Hỏi trước gi&aacute; khi thu&ecirc;</strong>: T&ugrave;y theo y&ecirc;u cầu, gi&aacute; thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn sẽ c&oacute; sự ch&ecirc;nh lệch kh&aacute;c nhau do đ&oacute; bạn h&atilde;y trao đổi v&agrave; hỏi xem nếu thu&ecirc; như vậy th&igrave; gi&aacute; như thế n&agrave;o, c&oacute; ưu đ&atilde;i g&igrave; kh&ocirc;ng.</li>
                    <li><strong>Lựa chọn đơn vị cho thu&ecirc; uy t&iacute;n</strong>: Bạn h&atilde;y tham khảo nhiều đơn vị kh&aacute;c nhau để xem b&ecirc;n n&agrave;o ch&iacute;nh s&aacute;ch, gi&aacute; th&agrave;nh tốt hơn, xe kh&ocirc;ng qu&aacute; cũ nh&eacute;!</li>
                </ul>
                
                <p><img alt="cho thuê xe nâng hàng 3 tấn" src="https://kfh.com.vn/wp-content/uploads/2023/09/cho-thue-xe-nang-hang-3-tan-2.jpg" style="height:590px; width:800px" /></p>
                
                <p><em>H&atilde;y lựa chọn đơn vị cho thu&ecirc; xe n&acirc;ng 3 tấn uy t&iacute;n</em></p>
                
                <h2><strong>Tại sao n&ecirc;n thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn tại KFH?</strong></h2>
                
                <p>Với nhiều năm hoạt động trong lĩnh vực cho thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn, KFH đ&atilde; x&acirc;y dựng được thương hiệu uy t&iacute;n tr&ecirc;n thị trường, nhận được sự tin tưởng rất lớn từ kh&aacute;ch h&agrave;ng bởi:</p>
                
                <ul>
                    <li><strong>Đa dạng c&aacute;c d&ograve;ng xe n&acirc;ng</strong>: Tại KFH ch&uacute;ng t&ocirc;i cho thu&ecirc; nhiều d&ograve;ng xe n&acirc;ng với tải trọng kh&aacute;c nhau ph&ugrave; hợp với mọi nhu cầu của kh&aacute;ch h&agrave;ng. B&ecirc;n cạnh đ&oacute;, KFH cho thu&ecirc; đa dạng c&aacute;c loại m&aacute;y m&oacute;c như m&aacute;y ph&aacute;t điện, m&aacute;y n&eacute;n kh&iacute;&hellip;</li>
                    <li><strong>Gi&aacute; th&agrave;nh cạnh tranh</strong>: So với những đơn vị kh&aacute;c tr&ecirc;n thị trường, gi&aacute; cho thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn của KFH kh&aacute; hợp l&yacute;, cam kết kh&ocirc;ng ph&aacute;t sinh chi ph&iacute; trong thời gian thu&ecirc;.</li>
                    <li><strong>C&oacute; nhiều ch&iacute;nh s&aacute;ch d&agrave;nh cho kh&aacute;ch h&agrave;ng</strong>: Khi thu&ecirc; xe n&acirc;ng h&agrave;ng tại KFH, kh&aacute;ch h&agrave;ng sẽ được tư vấn, hỗ trợ trong thời gian thu&ecirc; v&agrave; nếu thu&ecirc; trong thời gian d&agrave;i sẽ được chiết khấu theo đ&uacute;ng quy định.</li>
                    <li><strong>L&agrave;m việc nhanh ch&oacute;ng, chuy&ecirc;n nghiệp</strong>: Sau khi nhận được th&ocirc;ng tin, KFH sẽ nhanh ch&oacute;ng li&ecirc;n lạc, tư vấn để kh&aacute;ch h&agrave;ng chọn được loại xe ph&ugrave; hợp, đảm bảo hiệu suất l&agrave;m việc.</li>
                    <li><strong>C&oacute; đội ngũ kỹ thuật hỗ trợ</strong>: Đội ngũ kỹ thuật KFH c&oacute; chuy&ecirc;n m&ocirc;n cao, trong thời gian thu&ecirc; nếu c&oacute; bất kỳ vấn đề ph&aacute;t sinh ch&uacute;ng t&ocirc;i sẽ hỗ trợ trong thời gian sớm nhất.</li>
                </ul>
                
                <p><img alt="cho thuê xe nâng hàng 3 tấn" src="https://kfh.com.vn/wp-content/uploads/2023/09/cho-thue-xe-nang-hang-3-tan-3.jpg" style="height:720px; width:540px" /></p>
                
                <p><em>Thu&ecirc; xe n&acirc;ng 3 tấn gi&aacute; rẻ tại KFH</em></p>
                
                <h2><strong>Gi&aacute; thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn</strong></h2>
                
                <p>Gi&aacute; cho thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn l&agrave; c&acirc;u hỏi KFH nhận được rất nhiều từ kh&aacute;ch h&agrave;ng. Tuy nhi&ecirc;n, t&ugrave;y thuộc v&agrave;o từng y&ecirc;u cầu ch&uacute;ng t&ocirc;i mới c&oacute; thể b&aacute;o gi&aacute; chi tiết đến kh&aacute;ch h&agrave;ng.</p>
                
                <p>Một số yếu tố ảnh hưởng đến gi&aacute; thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn c&oacute; thể kể đến như:</p>
                
                <ul>
                    <li>Thời gian thu&ecirc; xe&nbsp;</li>
                    <li>Địa điểm thu&ecirc; xe&nbsp;</li>
                    <li>Thời điểm thu&ecirc; xe&nbsp;</li>
                    <li>Số lượng xe cần thu&ecirc;&hellip;</li>
                </ul>
                
                <p><img alt="cho thuê xe nâng hàng 3 tấn" src="https://kfh.com.vn/wp-content/uploads/2023/09/cho-thue-xe-nang-hang-3-tan-4.jpg" style="height:600px; width:800px" /></p>
                
                <p><em>Gi&aacute; cho thu&ecirc; xe n&acirc;ng phụ thuộc v&agrave;o nhiều yếu tố kh&aacute;c nhau</em></p>
                
                <p>Tuy nhi&ecirc;n, với những kh&aacute;ch h&agrave;ng thu&ecirc; xe số lượng lớn hoặc thu&ecirc; trong thời gian d&agrave;i th&igrave; sẽ c&oacute; những chiết khấu, giảm gi&aacute; t&ugrave;y theo từng trường hợp.</p>
                
                <h2><strong>Li&ecirc;n hệ với ch&uacute;ng t&ocirc;i&nbsp;</strong></h2>
                
                <p>Với những kh&aacute;ch h&agrave;ng c&oacute; nhu cầu&nbsp;<a href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-hang/">thu&ecirc; xe n&acirc;ng h&agrave;ng</a>&nbsp;nhưng kh&ocirc;ng biết n&ecirc;n lựa chọn loại n&agrave;o, tải trọng bao nhi&ecirc;u th&igrave; ph&ugrave; hợp th&igrave; h&atilde;y nhanh tay li&ecirc;n hệ đến th&ocirc;ng tin dưới đ&acirc;y.&nbsp;<a href="https://kfh.com.vn/">KFH</a>&nbsp;&ndash; Đơn vị chuy&ecirc;n&nbsp;<strong>cho thu&ecirc; xe n&acirc;ng h&agrave;ng 3 tấn</strong>&nbsp;lu&ocirc;n sẵn s&agrave;ng phục vụ!</p>',
                'level' => 2,
            ],

        ];
        DB::table('newinfos')->insert($newinfos);
    }
}
