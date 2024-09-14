<?php
$projects = get_projects_from_customizer();
?>

<section id="projects">
    <div class="flex flex-col space-y-6 py-8 2xl:px-24">
        <div>
            <h3 class="text-center font-heading text-5xl md:text-6xl font-bold uppercase text-primary-foreground">
                Projects
            </h3>
        </div>
        <div class="projects py-2">
            <div class="flex flex-wrap justify-center gap-4">
                <?php foreach ($projects as $project): ?>
                    <?php if ($project['title']): ?>
                        <div class="flex w-full flex-col rounded-lg border bg-[#1e293b] lg:w-[48%]">
                            <div class="window-title w-full rounded-t-md bg-[#334155] p-2 lg:p-3">
                                <div class="window-buttons flex gap-2">
                                    <p class="h-3 w-3 rounded-full bg-[#FF5F57] lg:h-4 lg:w-4"></p>
                                    <p class="h-3 w-3 rounded-full bg-[#FEBC2E] lg:h-4 lg:w-4"></p>
                                    <p class="h-3 w-3 rounded-full bg-[#28C840] lg:h-4 lg:w-4"></p>
                                </div>
                            </div>
                            <div class="aspect-video w-full rounded-md p-2 lg:p-3">
                                <img alt="<?php echo esc_attr(text: $project['title']); ?>" loading="lazy" width="1920" height="1080"
                                    decoding="async" data-nimg="1" class="h-full w-full rounded-md" style="color: transparent"
                                    src="<?php echo esc_url(url: $project['image']); ?>" />
                            </div>
                            <div class="px-2 pb-2 lg:px-3">
                                <div class="flex items-center justify-between border-b">
                                    <p class="text-2xl font-semibold text-primary-foreground lg:text-3xl">
                                        <?php echo esc_html(text: $project['title']); ?>
                                    </p>
                                    <div class="flex items-center gap-2">
                                        <?php if ($project['live_demo']): ?>
                                            <a href="<?php echo esc_url(url: $project['live_demo']); ?>" target="_blank"
                                                class="cursor-pointer rounded-full border border-transparent px-3 py-1 text-typewriter/80 transition hover:border-typewriter hover:text-typewriter/100 lg:text-xl">Live
                                                Demo</a>
                                        <?php endif; ?>
                                        <?php if ($project['github']): ?>
                                            <a href="<?php echo esc_url(url: $project['github']); ?>" target="_blank"><img alt="GitHub"
                                                    loading="lazy" width="40" height="40" decoding="async" data-nimg="1"
                                                    class="w-6 cursor-pointer lg:w-7" style="color: transparent"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/skills/github.svg" /></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="mt-2 flex flex-col gap-2 self-start rounded-md">
                                    <span
                                        class="text-justify font-secondary text-base leading-6 text-secondary-foreground"><?php echo esc_html(text: $project['description']); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>