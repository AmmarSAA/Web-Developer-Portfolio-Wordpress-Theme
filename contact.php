<?php
/* Template Name: Contact Section */
?>

<section id="contact">
    <div class="flex flex-col space-y-6 py-8 xl:px-20 2xl:px-32">
        <h3 class="text-center font-heading text-5xl md:text-6xl font-bold uppercase text-primary-foreground">
            <?php echo esc_html(text: get_theme_mod(name: 'project_cta_text', default_value: 'Contact')); ?>
        </h3>
        <div class="flex flex-col justify-between gap-8 xl:flex-row xl:py-8 lg:px-20 xl:px-0">
            <div class="space-y-8 xl:w-5/12">
                <div class="xl:space-y-2">
                    <h4 class="text-2xl font-semibold text-main md:text-3xl xl:text-4xl">
                        <?php echo esc_html(text: get_theme_mod(name: 'project_cta_text', default_value: 'Have a project in mind?')); ?>
                    </h4>
                    <p class="font-secondary text-base leading-5 text-secondary-foreground md:text-xl">
                        <?php echo wp_kses_post(data: get_theme_mod(name: 'contact_description', default_value: 'Let\'s collaborate and bring your ideas to life. I\'m excited to work on innovative projects and explore new opportunities.')); ?>
                    </p>
                </div>
                <div class="hidden xl:block">
                    <div class="sociel-media-links font-secondary">
                        <div class="flex flex-col gap-4">
                            <a class="flex items-center gap-1 xl:gap-2 self-start transition hover:grayscale"
                                href="<?php echo esc_url(url: get_theme_mod(name: 'link_1', default_value: 'https://github.com/ammarsaa')); ?>"
                                target="_blank">
                                <img alt="social-icons" loading="lazy" width="40" height="40" decoding="async"
                                    class="w-8 md:w-10 xl:w-12" style="color: transparent"
                                    src="<?php echo esc_url(url: get_theme_mod(name: 'link_1_logo', default_value: get_template_directory_uri() . '/assets/skills/github.svg')); ?>" />
                                <p class="text-base xl:text-2xl font-semibold text-primary-foreground md:text-xl">
                                    AmmarSAA</p>
                            </a>
                            <a class="flex items-center gap-1 xl:gap-2 self-start transition hover:grayscale"
                                href="mailto:<?php echo esc_attr(text: get_theme_mod(name: 'contact_email', default_value: 's.ammarahmed14@gmail.com')); ?>"
                                target="_blank">
                                <img alt="social-icons" loading="lazy" width="40" height="40" decoding="async"
                                    class="w-8 md:w-10 xl:w-12" style="color: transparent"
                                    src="<?php echo esc_url(url: get_template_directory_uri()); ?>/assets/svg/mail.svg" />
                                <p class="text-base xl:text-2xl font-semibold text-primary-foreground md:text-xl">
                                    <?php echo esc_html(text: get_theme_mod(name: 'contact_email', default_value: 's.ammarahmed14@gmail.com')); ?>
                                </p>
                            </a>
                            <a class="flex items-center gap-1 xl:gap-2 self-start transition hover:grayscale"
                                href="<?php echo esc_url(url: get_theme_mod(name: 'link_2', default_value: 'https://www.linkedin.com/in/ammarsaa')); ?>"
                                target="_blank">
                                <img alt="social-icons" loading="lazy" width="40" height="40" decoding="async"
                                    class="w-8 md:w-10 xl:w-12" style="color: transparent"
                                    src="<?php echo esc_url(url: get_theme_mod(name: 'link_2_logo', default_value: get_template_directory_uri() . '/assets/svg/linkedin.svg')); ?>" />
                                <p class="text-base xl:text-2xl font-semibold text-primary-foreground md:text-xl">
                                    AmmarSAA</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form id="contactForm" class="w-full xl:w-5/12">
                <input type="hidden" name="contact_nonce"
                    value="<?php echo wp_create_nonce(action: 'submit_contact_form'); ?>" />
                <div class="rounded-md bg-secondary-background p-2 shadow-md md:p-3">
                    <div class="flex flex-col gap-4">
                        <div>
                            <label for="email"
                                class="text-base capitalize text-primary-foreground md:text-xl 2xl:text-2xl">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full rounded-md border bg-transparent p-1 text-base text-primary-foreground outline-none focus:border-main md:text-xl 2xl:p-2" />
                        </div>
                        <div>
                            <label for="subject"
                                class="text-base capitalize text-primary-foreground md:text-xl 2xl:text-2xl">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full rounded-md border bg-transparent p-1 text-base text-primary-foreground outline-none focus:border-main md:text-xl 2xl:p-2" />
                        </div>
                        <div>
                            <label for="message" class="text-base md:text-xl 2xl:text-2xl">Message</label>
                            <textarea id="message" name="message" required
                                class="w-full rounded-md border bg-transparent p-1 text-base text-primary-foreground outline-none focus:border-main md:text-xl 2xl:p-2"
                                rows="6"></textarea>
                        </div>
                        <div class="flex justify-end gap-4">
                            <button type="submit"
                                class="rounded-md bg-main px-4 py-2 text-base font-semibold text-primary-foreground transition hover:bg-main-focus md:text-xl 2xl:px-6 2xl:py-3 2xl:text-2xl">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>