<?php
/* Template Name: Skills Section */

// Fetch skills from customizer settings
$skills = get_skills_from_customizer();
?>

<section id="skills" class="py-20 sm:py-8">
    <div class="flex flex-col w-full space-y-6">
        <!-- Section Title -->
        <div>
            <h3 class="text-center font-heading text-5xl md:text-6xl font-bold uppercase text-primary-foreground">
                Skills
            </h3>
        </div>

        <!-- Skills Container -->
        <div class="w-full px-10">
            <!-- Frontend Skills -->
            <div class="space-y-4">
                <h4 class="text-center font-semibold text-typewriter">
                    Frontend
                </h4>
                <div class="skills flex flex-col items-center gap-8">
                    <div class="carousel" data-reverse="false"
                        style="--card-items: <?php echo count($skills['frontend']); ?>">
                        <div class="track h-full">
                            <?php if (!empty($skills['frontend'])): ?>
                                <?php foreach ($skills['frontend'] as $index => $skill): ?>
                                    <div class="card grid cursor-pointer place-content-center place-items-center gap-1 rounded-md border border-secondary-foreground bg-gray-900 hover:border-main"
                                        style="--card-index: <?php echo $index + 1; ?>">
                                        <img alt="<?php echo esc_attr($skill['name']); ?> image" loading="lazy" width="40"
                                            height="40" src="<?php echo $skill['image']; ?>" />
                                        <p class="text-primary-foreground tracking-tighter md:text-xl">
                                            <?php echo esc_html($skill['name']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No frontend skills available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Skills -->
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full space-y-4">
                    <h4 class="text-center font-semibold text-typewriter">
                        Backend
                    </h4>
                    <div class="carousel" data-reverse="true"
                        style="--card-items: <?php echo count($skills['backend']); ?>">
                        <div class="track h-full">
                            <?php if (!empty($skills['backend'])): ?>
                                <?php foreach ($skills['backend'] as $index => $skill): ?>
                                    <div class="card grid cursor-pointer place-content-center place-items-center gap-1 rounded-md border border-secondary-foreground bg-gray-900 hover:border-main"
                                        style="--card-index: <?php echo $index + 1; ?>">
                                        <img alt="<?php echo esc_attr($skill['name']); ?> image" loading="lazy" width="40"
                                            height="40" src="<?php echo $skill['image']; ?>" />
                                        <p class="text-primary-foreground tracking-tighter md:text-xl">
                                            <?php echo esc_html($skill['name']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No backend skills available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Tools Skills -->
                <div class="w-full space-y-4">
                    <h4 class="text-center font-semibold text-typewriter">
                        Tools
                    </h4>
                    <div class="carousel" data-reverse="false"
                        style="--card-items: <?php echo count($skills['tools']); ?>">
                        <div class="track h-full">
                            <?php if (!empty($skills['tools'])): ?>
                                <?php foreach ($skills['tools'] as $index => $skill): ?>
                                    <div class="card grid cursor-pointer place-content-center place-items-center gap-1 rounded-md border border-secondary-foreground bg-gray-900 hover:border-main"
                                        style="--card-index: <?php echo $index + 1; ?>">
                                        <img alt="<?php echo esc_attr($skill['name']); ?> image" loading="lazy" width="40"
                                            height="40" src="<?php echo $skill['image']; ?>" />
                                        <p class="text-primary-foreground tracking-tighter md:text-xl">
                                            <?php echo esc_html($skill['name']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No tools available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>