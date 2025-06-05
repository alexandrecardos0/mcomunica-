<?php
get_header();
?>
<main>
    <section>
        <?= get_template_part('parts/part', 'banner') ?>
    </section>

    <section>
        <div class="container bg-white shadow-xl rounded-2xl bottom-32 relative p-8">
            <div class="grid grid-cols-2 gap-8">
                <div class="p-8 flex items-center">
                    <div>
                        <h2 class="text-primary-500 font-extrabold text-5xl mb-5">Quem sou eu</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium ut leo eu
                            scelerisque. Vestibulum tempus fermentum eros, in interdum orci. Vivamus pharetra urna blandit,
                            tincidunt justo sed, efficitur quam. Donec efficitur odio vitae tellus auctor, sed vestibulum
                            lorem imperdiet. In ultricies lacus consequat, eleifend libero ut, accumsan dui. In gravida
                            consequat felis non posuere. In hac habitasse platea dictumst. Sed ut nulla id nulla ultricies
                            varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Nullam dignissim et risus in congue. Curabitur pellentesque libero dui, et porttitor
                            dui hendrerit in. Fusce cursus convallis gravida.
                        </p>
                    </div>
                </div>

                <div class="p-8">
                    <img class="w-full h-[380px] object-cover rounded-xl" src="https://cdn.pixabay.com/photo/2020/04/09/19/59/man-5022931_1280.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>