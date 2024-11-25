<div class="display-flex bg-support">
    <div class="img-support">
        <div class="hotline-support-main">
            <a href="#" class="hotline-support">Hotline: 1800 7200</a>
        </div>
        <form class="need-support" action="your-server-endpoint" method="post" enctype="multipart/form-data">
            <div>
                <h1>Thông tin liên hệ?</h1>
                <p class="content-support">Xin vui lòng để lại thông tin liên hệ của bạn.</p>
            </div>
            <div>
                <div class="display-flex support-input">
                    <input type="text" name="name" class="input-name input-border" placeholder="Họ tên" required>
                    <input type="tel" name="phone" class="input-name input-border" placeholder="+(84) 0123 456" required>
                </div>
                <div class="input-email-support">
                    <input type="email" name="email" class="input-email input-border" placeholder="Enter email" required>
                </div>
                <div>
                    <textarea name="content" id="content" class="textarea-content input-border" placeholder="Nội dung liên hệ" required></textarea>
                </div>
                <div class="display-flex support-input file-input">
                    <div>
                        <button type="submit" class="request-input">Gửi thông tin</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="img-support">
        <img src="<?php echo get_theme_file_uri() . '/assets/support.jpg'; ?>" alt="loadding" width="100%">
    </div>
</div>