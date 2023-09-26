@extends('frontend/master/master')
@section('title', 'Trang chủ')
@section('main')

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/xe-nang-hang-3t.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/BANNE-DEN-CHIEU-SANG.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/banner-khi-nen-atlas-scaled.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Banner-tong-so-2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/banner-may-nen-khi.jpg" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>Về chúng tôi</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                            <span
                                style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;"><span>&nbsp;</span></span><b><span
                                    style="font-size: 10.0pt; font-family: 'Roboto-Regular','serif';   color: black; text-transform: uppercase;">VỀ
                                    CHÚNG TÔI</span></b>
                        </p>
                        <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                            <b><span style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">Công
                                    ty Cổ phần cho thuê thiết bị xây dựng Kanamoto Fecon Hassyu ( KFH)</span></b><span
                                style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">&nbsp;
                                là công ty hoạt động trong lĩnh vực cho thuê thiết bị xây dựng</span><span lang="VI"
                                style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">.</span>
                        </p>
                        <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                            <span style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">KFH
                                được thành lập vào tháng 6/2015 trên cơ sở hợp tác của bốn&nbsp;doanh nghiệp:</span>
                        </p>
                        <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                            <b><i><span style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">Tập
                                        đoàn Kanamoto (Nhật Bản):</span></i></b><i><span
                                    style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">&nbsp;</span></i><span
                                style="font-size: 10.0pt; font-family: 'Times New Roman','serif';  color: #2f2f2f;">là
                                doanh nghiệp hàng đầu Nhật Bản với hơn 50 năm hoạt động trong lĩnh vực cho thuê thiết bị
                                xây dựng. Hiện nay Kanamoto đang sở hữu trên 500.000 máy móc, thiết bị xây dựng với
                                khoảng 460 chủng&nbsp; loại, chủ yếu là thiết bị mới hoặc xuất năm 2000. Có trụ sở chính
                                tại Nhật Bản với trên 450 chi nhánh, Kanamoto đang tích cực mở rộng thị trường tại 7
                                nước Đông Nam Á trong đó có Việt Nam.</span>
                        </p>
                        <span
                            style="color: #2f2f2f; font-family: 'Times New Roman', serif; font-size: 13.3333px; text-align: justify;"></span>
                        <p></p> <a href="">Xem thêm</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="qt-item">
                        <img class="img-fluid" src="https://kfh.com.vn/wp-content/uploads/2019/11/about.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products-home">
        <div class="container">
            <div class="product-wrap">
                <div class="title">
                    <h2>Thiết bị cho thuê</h2>
                </div>
                <!-- --------------------- Products --------------------- -->
                <div class="sh-product-shortcode column-4">
                    <ul class="row list-products">
                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/may-nen-khi/"
                                        title="MÁY NÉN KHÍ">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/MAY-NEN-KHI-AIRMAN-18.5-M3-PDS655.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY NÉN KHÍ"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-nen-khi/">MÁY NÉN KHÍ</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/may-phat-han/"
                                        title="MÁY PHÁT HÀN">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/MAY-PHAT-HAN-DENYO-300A.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY PHÁT HÀN"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-phat-han/">MÁY PHÁT HÀN</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/may-phat-dien/"
                                        title="MÁY PHÁT ĐIỆN">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/MAY-PHAT-DIEN-DENYO-DCA-300-KVA.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY PHÁT ĐIỆN"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-phat-dien/">MÁY PHÁT ĐIỆN</a>
                                </h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/may-thanh-li/"
                                        title="MÁY THANH LÝ">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2020/08/ANH-DAI-DIEN-THANH-LY.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY THANH LÝ"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-thanh-li/">MÁY THANH LÝ</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-xuc-lat-bobcat/"
                                        title="MÁY XÚC LẬT BOBCAT">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2022/10/bobcat-s570.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY XÚC LẬT BOBCAT"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-xuc-lat-bobcat/">MÁY XÚC LẬT
                                        BOBCAT</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/may-xuc-dao/"
                                        title="MÁY XÚC ĐÀO">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/MAY-XUC-DAO-KOMATSU-PC200-8N1.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="MÁY XÚC ĐÀO"
                                        href="https://kfh.com.vn/danh-muc-san-pham/may-xuc-dao/">MÁY XÚC ĐÀO</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/danh-muc-moi/"
                                        title="THIẾT BỊ KHÁC">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2020/08/ANH-DAI-DIEN.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="THIẾT BỊ KHÁC"
                                        href="https://kfh.com.vn/danh-muc-san-pham/danh-muc-moi/">THIẾT BỊ KHÁC</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-hang/"
                                        title="XE NÂNG HÀNG">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/FORKLIFT-mitsubishi-15T.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="XE NÂNG HÀNG"
                                        href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-hang/">XE NÂNG HÀNG</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom"
                                        href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-nguoi-cat-keo/"
                                        title="XE NÂNG NGƯỜI CẮT KÉO">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/XE-NANG-NGUOI-CAT-KEO-10M.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="XE NÂNG NGƯỜI CẮT KÉO"
                                        href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-nguoi-cat-keo/">XE NÂNG NGƯỜI
                                        CẮT KÉO</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom"
                                        href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-nguoi-dang-can/"
                                        title="XE NÂNG NGƯỜI KIỂU Z">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/XE-NANG-NGUOI-BOOM-LIFT-24M.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="XE NÂNG NGƯỜI KIỂU Z"
                                        href="https://kfh.com.vn/danh-muc-san-pham/xe-nang-nguoi-dang-can/">XE NÂNG
                                        NGƯỜI KIỂU Z</a></h3>
                            </div>
                        </li>


                        <li class="product">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom"
                                        href="https://kfh.com.vn/danh-muc-san-pham/den-chieu-tu-phat/"
                                        title="ĐÈN CHIẾU TỰ PHÁT">
                                        <img width="43" height="125"
                                            src="https://kfh.com.vn/wp-content/uploads/2019/12/den-chieu-sang-tu-phat-4-bong-400w.jpg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt=""></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title"><a title="ĐÈN CHIẾU TỰ PHÁT"
                                        href="https://kfh.com.vn/danh-muc-san-pham/den-chieu-tu-phat/">ĐÈN CHIẾU TỰ
                                        PHÁT</a></h3>
                            </div>
                        </li>

                    </ul>
                </div> <!-- <div class="text-center">
                            <a href=""></a>
                        </div> -->
            </div>
        </div>
    </div>
    <div class="news-home">

    </div>


@endsection
