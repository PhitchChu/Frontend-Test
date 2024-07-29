<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend-Test</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    {{-- นำเข้า Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- นำเข้า FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-0uw6OUGkQzZ6s7gD2hBP+53HsG6rwVpGsf9BdUZd8L1X9lDw1S6Z3g7qK4Bd6ht4no+PIsHJAIzflPZbPefG4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="header-content">
                <h1 class="main-title">INNOVATION <br> & SECURITY</h1>
                <h2 class="sub-title">For <br> Future Healthcare</h2>
                <div class="details">
                    <div class="left">
                        <span class="date">
                            <span class="day">24</span> 
                            <span class="month-year">MAR 2023</span>
                        </span>
                        <span class="time">เวลา 13:00-19:00 น.</span>
                    </div>
                    <div class="divider"></div>
                    <div class="right">
                        <span class="sub-title">At Grand Ballroom 4th Floor</span>
                        <span>Pullman Bangkok Grande Sukhumvit</span>
                    </div>
                </div>
                <p class="description">เหนือกว่า ด้วยโซลูชัน Healthcare แห่งอนาคต</p>
                <p class="details">กลยุทธ์ความก้าวหน้า เพิ่มศักยภาพการรักษาและการให้บริการด้านสาธารณสุขด้วย AI
                    diagnosis, IoT,
                    <br> Telemedicine, Self-service และ Medical Service Platform พร้อมการปกป้องข้อมูลส่วนบุคคล (PDPA)
                    <br> และรับมือกับภัยจากทุกสถานการณ์ เพื่อความปลอดภัยสูงสุด
                </p>
                <br> <br> <br>
            </div>
        </div>
        <!-- Registration Section -->
        <div class="registration">
            <p class="description">
                สำรองที่นั่งล่วงหน้า <span class="highlight">(จำนวนจำกัด*)</span> <br>
                <span class="note">หมายเหตุ : สัมมนา Exclusive สำหรับกลุ่มโรงพยาบาล และสาธารณะสุข</span>
            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdf-Px9QA76gCH1byd_sV1aTEsOJkd_bGDPHt8_tqhDKBhGMw/viewform?usp=send_form"
                class="register-button">ลงทะเบียน</a>
        </div>
        <!-- Registration Section -->

        <!-- Content Section -->
        <div class="content">
            <h2>พบกับกุญแจสำคัญของ <span class="highlight-content">"Healthcare"</span> แห่งอนาคตได้ที่งานสัมมนานี้</h2>
            <ul>
                <li>เพิ่มศักยภาพการรักษา และการให้บริการด้วย IoT, AI diagnosis, Telemedicine, Self-service และ Medical
                    Service Platform</li>
                <li>ก้าวสู่ Smart Healthcare ด้วย Intelligent Infrastructure</li>
                <li>ยกระดับความสามารถในการบริหารจัดการข้อมูลด้วย AI & Automation</li>
                <li>ยกระดับความปลอดภัย และความเสถียรด้วยเทคโนโลยีการปกป้องข้อมูล</li>
                <li>และอื่นๆ ที่จะช่วยให้โรงพยาบาลสามารถบริหารงานได้อย่างมีประสิทธิภาพ</li>
            </ul>
        </div>
        <!-- Content Section -->

        <!-- Main Speakers Section -->
        <div class="container_MainSpeakers">
            <div class="header_MainSpeakers">
                <h1>Main Speakers</h1>
            </div>
            <div class="speakers">
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_1.png') }}" alt="Speaker 1">
                    <h2>รศ. วิรุฬห์ ศรีบริรักษ์</h2>
                    <h3>คณะวิศวกรรมศาสตร์ มหาวิทยาลัยบูรพา</h3>
                    <p>ผู้ก่อตั้ง Bangsaen Design House Group
                        <br> และทีม-อยู่-ดี แพลตฟอร์ม
                    </p>
                </div>
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_2.png') }}" alt="Speaker 2">
                    <h2>ผศ.ดร. กฤษณะ ชินสาร</h2>
                    <h3>คณะวิศวกรรมศาสตร์ มหาวิทยาลัยบูรพา</h3>
                </div>
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_3.png') }}" alt="Speaker 3">
                    <h2>คุณวิญญู อดิศักดิ์ตระกูล</h2>
                    <h3>Solution Consultant Manager</h3>
                    <p>บริษัท ซิงฟอร์ เทคโนโลยี (ประเทศไทย) จำกัด</p>
                </div>
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_4.png') }}" alt="Speaker 4">
                    <h2>คุณสรรชัย ลิฟหาเกียรติ</h2>
                    <h3>Senior Technical Management</h3>
                    <p>บริษัท เลอโนโว (ประเทศไทย)</p>
                </div>
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_5.png') }}" alt="Speaker 5">
                    <h2>คุณวันพิชิต ชินตระกูลชัย</h3>
                        <h3>Chief Technology Officer</h3>
                        <p>บริษัท แร็กน่าร์ คอร์ปอเรชั่น จำกัด และ
                            <br> ผู้ก่อตั้ง t-reg PDPA Platform
                        </p>
                </div>
                <div class="speaker">
                    <img src="{{ asset('images\main_speaker\speaker_6.png') }}" alt="Speaker 6">
                    <h2>คุณพิชเชษฐ์ พิกกังวลิน</h3>
                        <h3>Chief Technology Officer</h3>
                        <p>บริษัท คลิกเน็ท จำกัด</p>
                </div>
            </div>
        </div>
        <!-- Main Speakers Section -->

        <!-- Schedule Section -->
        <div class="schedule-container">
            <div class="schedule-header">
                <h1>Schedule</h1>
            </div>
            <div class="schedule-section">
                <div class="schedule-item">
                    <div class="schedule-time">ช่วงที่ 1 13:00 - 15:30 น.</div>
                    <ul class="schedule-details">
                        <li>PDPA ในโรงพยาบาล ความท้าทายใหม่หลังการบังคับใช้ พ.ร.บ.คุ้มครองข้อมูลส่วนบุคคล</li>
                        <li>Improving Cyber resilience with AI & Automation</li>
                        <li>Lenovo Intelligent Infrastructure to enable Smart Healthcare</li>
                    </ul>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">ช่วงที่ 2 15:35 - 17:05 น.</div>
                    <ul class="schedule-details">
                        <li>Enhance customer experience for Healthcare with digital technologies</li>
                        <li>Holistic IoT & AI for Healthcare, Telemedicine and Medical Service Platform</li>
                        <li>Empowering Health Tech solution with AI diagnosis</li>
                    </ul>
                </div>
                <div class="schedule-item">
                    <div class="schedule-time">17:05 - 19:00 น.</div>
                    &nbsp;&nbsp;ร่วมรับประทานอาหาร (International Dinner Buffet)
                </div>
            </div>
        </div>
        <!-- Schedule Section -->
        
        <!-- New Section: Location and Prizes -->
        <div class="location-and-prizes">
            <div class="container_Location">
                <div class="content_Location">
                    <h1>ณ ห้องแกรนด์บอลรูม ชั้น 4</h1>
                    <p>โรงแรมพูลแมน กรุงเทพแกรนด์ สุขุมวิท</p>
                    <a href="https://www.google.com/maps" class="button_Location">ดูแผนที่ google map</a>
                </div>
                <img src="{{ asset('images\other\room.png') }}" alt="Event Location">
            </div>
            <!-- Product -->
            <br>
            <div class="container_Product">
                <div class="header_Product"><span>สำหรับผู้เข้าร่วมงานลุ้นรับรางวัล</div>
                <div class="prizes_Product">
                    <div class="prize_Product">
                        <img src="{{ asset('images\product\Ipad gen10.png') }}" alt="Ipad Gen 10 64GB">
                        <div>
                            <span class="prize_product_text"> Ipad Gen 10 <span class="prize_product_text_sub">64GB
                                </span></span>
                        </div>
                        <p class="prize_product_text_sub_2">1 รางวัล</p>
                    </div>
                    <div class="prize_Product">
                        <img src="{{ asset('images\product\apple watch.png') }}" alt="Apple Watch SE">
                        <div>
                            <span class="prize_product_text">Apple Watch SE</span>
                        </div>
                        <p class="prize_product_text_sub_2">1 รางวัล</p>
                    </div>
                    <div class="prize_Product">
                        <img src="{{ asset('images\product\SMSMKT logo.png') }}" alt="Bulk SMS 5,000 SMS">
                        <div>
                            <span class="prize_product_text">Bulk SMS 5,000 sms</span>
                        </div>
                        <p class="prize_product_text_sub_2">10 รางวัล</p>
                    </div>
                </div>
                <div class="registration_Product">สำรองที่นั่งล่วงหน้า <span class="highlight-down">(จำนวนจำกัด*)</span></div>
                <div class="note_Product">หมายเหตุ: สัมมนา Exclusive สำหรับกลุ่มโรงพยาบาล และสาธารณสุข</div>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdf-Px9QA76gCH1byd_sV1aTEsOJkd_bGDPHt8_tqhDKBhGMw/viewform?usp=send_form"
                    class="button_Product">ลงทะเบียน</a>
                <div class="contact_Product">
                    <span class="highlight-down">ติดต่อสอบถามรายละเอียดเพิ่มเติม <i class="fas fa-phone-alt"></i> <span style="color: blue;">คุณนันทพร ทองเพชร 084-118-4868</span></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
