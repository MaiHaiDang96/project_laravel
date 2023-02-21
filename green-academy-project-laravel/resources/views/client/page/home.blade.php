@extends('client.master')
@section('content')
<div>
    <article class="content">
        <section class="visual_wrap" data-img="https://s1.pearlcdn.com/SEA/Upload/BANNER/MAIN/bannerImage_20221212082557.jpg">
            <div class="video_wrap" data-resize-parent="true" style="">
                <video id="videoTag" muted="muted" preload="none" loop="loop" data-resize="true" autoplay>
                <source class="webmSrc" type="video/webm" src="https://s1.pearlcdn.com/global_static/video/maeguwoosa_main_loop.webm" onerror="document.getElementsByClassName('video_wrap')[0].style.display = 'none';">
                <source class="mp4Src" type="video/mp4" src="" onerror="document.getElementsByClassName('video_wrap')[0].style.display = 'none';">
                <source class="mp4Src" type="video/mp4" src="https://s1.pearlcdn.com/global_static/video/maeguwoosa_main_loop.mp4" onerror="document.getElementsByClassName('video_wrap')[0].style.display = 'none';">
                </video>
            </div>
        </section>
        <section class="news_wrap section_wrap">
            <h2 class="blind">Latest News</h2>
            <div class="section_inner">
                <div class="news_list js-newsSlider">
                <article class="news_item" data-dot="<button role='button' type='button' class='owl-dot'><span class='blind'>1</span></button>">
                    <a href="/News/Notice/Detail?groupContentNo=8484" class="news_box">
                        <div class="img_area">
                            <div class="img_wrap">
                            <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/5U1308LHIQWVB72P20221208165808392.400x225.jpg" alt="Don't forget to get your coupons! " onerror="this.src='https://s1.pearlcdn.com/SEA/contents/img/portal/news/news_thumb_default.jpg'">
                            </div>
                        </div>
                        <div class="desc_area">
                            <p class="news_category">
                            Events
                            </p>
                            <h3 class="title">Don't forget to get your coupons! </h3>
                        </div>
                    </a>
                </article>
                <article class="news_item" data-dot="<button role='button' type='button' class='owl-dot'><span class='blind'>2</span></button>">
                    <a href="/News/Notice/Detail?groupContentNo=8456" class="news_box">
                        <div class="img_area">
                            <div class="img_wrap">
                            <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/1DX17DZ5OJSZUQAB20221213174921900.400x225.jpg" alt="New Class, New Season!" onerror="this.src='https://s1.pearlcdn.com/SEA/contents/img/portal/news/news_thumb_default.jpg'">
                            </div>
                        </div>
                        <div class="desc_area">
                            <p class="news_category">
                            Events
                            </p>
                            <h3 class="title">New Class, New Season!</h3>
                        </div>
                    </a>
                </article>
                <article class="news_item" data-dot="<button role='button' type='button' class='owl-dot'><span class='blind'>3</span></button>">
                    <a href="/News/Notice/Detail?groupContentNo=7801" class="news_box">
                        <div class="img_area">
                            <div class="img_wrap">
                            <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/82BQL6RBGOJ28VPD20220726193542500.400x225.png" alt="Unmissable Benefits for New and Returning Adventurers" onerror="this.src='https://s1.pearlcdn.com/SEA/contents/img/portal/news/news_thumb_default.jpg'">
                            </div>
                        </div>
                        <div class="desc_area">
                            <p class="news_category">
                            Events
                            </p>
                            <h3 class="title">Unmissable Benefits for New and Returning Adventurers</h3>
                        </div>
                    </a>
                </article>
                </div>
            </div>
        </section>
        <section id="event_main_section"></section>
        <section id="event_main_section_sha"></section>
        <section class="feature_wrap section_wrap">
            <div class="section_inner">
                <div class="feature_subject js-scrollAni">
                <h2 class="section_title bold fadeUp">Uncover the Ancients' Truth</h2>
                <p class="section_desc fadeUp">An Adventurer who's lost all memories stands at the center of a continent. <br />Begin your journey to uncover the truth of this world. </p>
                </div>
                <section class="feature_contents adventure">
                <div class="feature_thumb js-scrollAni">
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_adventure_thumb.png" alt="Limitless Adventures" class="feature_thumb_img fadeUp" width="680" height="402" loading="lazy">
                </div>
                <div class="feature_contents_subject js-scrollAni">
                    <h3 class="feature_contents_title fadeUp">Limitless Adventures</h3>
                    <p class="feature_contents_desc fadeUp">Wander the plains on horseback or sail the oceans on a ship. <br />Explore the wide world and create your own story.</p>
                    <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Feature" class="feature_contents_more fadeUp">See more</a>
                </div>
                </section>
                <section class="feature_contents battle">
                <div class="feature_thumb">
                    <div class="thumb_img_wrap js-parallaxWrap">
                        <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_battle_thumb.jpg?v=1" alt="Countless Battles" class="feature_thumb_img feature_parallax js-battleParallax main-pc" data-parallax="scale" data-parallaxduration="0.000205" loading="lazy">
                        <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_feature_battle_thumb.jpg?v=1" alt="Countless Battles" class="feature_thumb_img feature_parallax js-battleParallax main-m" data-parallax="scale" data-parallaxduration="0.000205" loading="lazy">
                    </div>
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_battle_character.png?v=2" alt="ranger nova" class="feature_thumb_img char js-scrollAni main-pc" width="1280" height="677" data-ofsaddheight="0.4" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_feature_battle_character.png?v=2" alt="ranger nova" class="feature_thumb_img char js-scrollAni main-m" width="1280" height="677" data-ofsaddheight="0.4" loading="lazy">
                </div>
                <div class="feature_contents_subject js-scrollAni">
                    <div class="subject_inner">
                        <h3 class="feature_contents_title fadeUp">Countless Battles</h3>
                        <p class="feature_contents_desc fadeUp">Fight back the forces that threaten the world or test your might against other Adventurers. <br />Lead your guild to victory in battle to earn great renown and greater wealth.</p>
                    </div>
                    <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Feature" class="feature_contents_more fadeUp">See more</a>
                </div>
                </section>
                <section class="feature_contents life">
                <div class="feature_thumb js-scrollAni">
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_life_thumb_1.jpg" alt="life" class="feature_thumb_img bg fadeUp" width="440" height="550" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_life_thumb_1_char.png" alt="music" class="feature_thumb_img char" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_life_thumb_1_pet.png" alt="bird" class="feature_thumb_img pet fadeLeft" loading="lazy">
                </div>
                <div class="feature_contents_subject js-scrollAni">
                    <h3 class="feature_contents_title fadeUp">Endless Possibilities</h3>
                    <p class="feature_contents_desc fadeUp">Cozy up in your uniquely decorated residence,<br />sit and listen to insects around a campfire,<br />embark on a fishing trip with friends, or become a talented alchemist.</p>
                    <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Feature" class="feature_contents_more js-scrollAni fadeUp">See more</a>
                </div>
                <span class="thumb_back back1 js-scrollAni" data-ofsaddheight="0.3">
                <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_life_thumb_2.jpg" alt="fishing" class="feature_thumb_img fadeUp" loading="lazy">
                </span>
                <span class="thumb_back back2 js-scrollAni">
                <img src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_feature_life_thumb_3.jpg" alt="crafting" class="feature_thumb_img fadeLeft" loading="lazy">
                </span>
                </section>
            </div>
        </section>
        <section class="world_wrap js-parallaxWrap">
            <div class="world_subect js-scrollAni">
                <h2 class="section_title">A Vast Open World</h2>
                <p class="section_desc">From the scorching heat of a desert metropolis <br />to the serene peace of hidden forest enclaves, <br />a thrilling story follows wherever your footsteps take you.</p>
            </div>
            <div class="world_parallax_wrap">
                <div class="world_parallax js-worldParallax"></div>
            </div>
        </section>
        <section class="character_wrap js-scrollAni" data-ofsaddheight="0.1">
            <h2 class="blind">Class Introduction</h2>
            <section class="character_list owl-carousel">
                <section id="WARRIOR" class="character_item character_0" data-dot="<button type='button' role='button'><span class='blind'>Warrior</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Warrior</h3>
                        <span class="class_desc">Warrior is a skilled melee fighter that uses a sword and shield.<br> He's a powerful combatant with balanced offense and defense.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=0" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_0.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_0.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_0.png?v=1" alt="Warrior" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_0.png?v=1" alt="Warrior" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_0.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_0.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_0.png" alt="Warrior" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_0.png" alt="Warrior" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="RANGER" class="character_item character_4" data-dot="<button type='button' role='button'><span class='blind'>Ranger</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Ranger</h3>
                        <span class="class_desc">Ranger is a ranged class that attacks enemies from afar.<br> She uses ranged strikes in combat to keep her targets at bay.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=4" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_4.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_4.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_4.png?v=1" alt="Ranger" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_4.png?v=1" alt="Ranger" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_4.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_4.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_4.png" alt="Ranger" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_4.png" alt="Ranger" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="SORCERER" class="character_item character_8" data-dot="<button type='button' role='button'><span class='blind'>Sorceress</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Sorceress</h3>
                        <span class="class_desc">Sorceress is a hybrid class adept at both melee and ranged combat.<br>Her dark magic makes her a threat at any range.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=8" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_8.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_8.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_8.png?v=1" alt="Sorceress" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_8.png?v=1" alt="Sorceress" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_8.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_8.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_8.png" alt="Sorceress" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_8.png" alt="Sorceress" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="GIANT" class="character_item character_12" data-dot="<button type='button' role='button'><span class='blind'>Berserker</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Berserker</h3>
                        <span class="class_desc">Berserker is a melee fighter who wields massive axes to<br>mercilessly attack his foes. His bestial rage cleaves enemies apart<br />with ease.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=12" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_12.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_12.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_12.png?v=1" alt="Berserker" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_12.png?v=1" alt="Berserker" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_12.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_12.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_12.png" alt="Berserker" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_12.png" alt="Berserker" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="TAMER" class="character_item character_16" data-dot="<button type='button' role='button'><span class='blind'>Tamer</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Tamer</h3>
                        <span class="class_desc">Tamer is an up-close combatant who fights in tandem with her beast companion.<br>She can even ride atop Heilang as its fangs and claws shred opponents.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=16" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_16.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_16.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_16.png?v=1" alt="Tamer" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_16.png?v=1" alt="Tamer" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_16.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_16.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_16.png" alt="Tamer" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_16.png" alt="Tamer" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="MUSA" class="character_item character_20" data-dot="<button type='button' role='button'><span class='blind'>Musa</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Musa</h3>
                        <span class="class_desc">Musa is a martial arts master whose sword strikes with speed and precision.<br>Enemies fall before he sheathes his blade.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=20" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_20.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_20.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_20.png?v=1" alt="Musa" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_20.png?v=1" alt="Musa" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_20.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_20.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_20.png" alt="Musa" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_20.png" alt="Musa" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="MAEHWA" class="character_item character_21" data-dot="<button type='button' role='button'><span class='blind'>Maehwa</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Maehwa</h3>
                        <span class="class_desc">Maehwa uses martial arts techniques to slice through enemies like water.<br>Her blade moves with all the swiftness of the wind.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=21" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_21.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_21.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_21.png?v=1" alt="Maehwa" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_21.png?v=1" alt="Maehwa" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_21.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_21.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_21.png" alt="Maehwa" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_21.png" alt="Maehwa" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="VALKYRIE" class="character_item character_24" data-dot="<button type='button' role='button'><span class='blind'>Valkyrie</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Valkyrie</h3>
                        <span class="class_desc">Valkyrie leads the charge on the battlefield with her sword and shield.<br>She channels Elion's sacred powers through her skills.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=24" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_24.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_24.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_24.png?v=1" alt="Valkyrie" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_24.png?v=1" alt="Valkyrie" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_24.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_24.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_24.png" alt="Valkyrie" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_24.png" alt="Valkyrie" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="KUNOICHI" class="character_item character_25" data-dot="<button type='button' role='button'><span class='blind'>Kunoichi</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Kunoichi</h3>
                        <span class="class_desc">Kunoichi is a deadly assassin that strikes with swords and cunning ninjutsu.<br>She'll use any trick to ensure her victory.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=25" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_25.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_25.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_25.png?v=1" alt="Kunoichi" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_25.png?v=1" alt="Kunoichi" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_25.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_25.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_25.png" alt="Kunoichi" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_25.png" alt="Kunoichi" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="NINJA" class="character_item character_26" data-dot="<button type='button' role='button'><span class='blind'>Ninja</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Ninja</h3>
                        <span class="class_desc">Ninja is an expert in all lethal arts, be it stealth strikes with a blade or shuriken.<br>His ninjutsu ensures he never leaves a trace.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=26" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_26.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_26.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_26.png?v=1" alt="Ninja" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_26.png?v=1" alt="Ninja" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_26.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_26.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_26.png" alt="Ninja" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_26.png" alt="Ninja" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="WIZARD" class="character_item character_28" data-dot="<button type='button' role='button'><span class='blind'>Wizard</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Wizard</h3>
                        <span class="class_desc">Wizard is a ranged spellcaster who can control<br />the forces of nature with his staff.<br />He will use primordial elements to obliterate his enemies.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=28" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_28.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_28.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_28.png?v=1" alt="Wizard" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_28.png?v=1" alt="Wizard" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_28.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_28.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_28.png" alt="Wizard" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_28.png" alt="Wizard" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="WITCH" class="character_item character_31" data-dot="<button type='button' role='button'><span class='blind'>Witch</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Witch</h3>
                        <span class="class_desc">Witch is a ranged spellcaster who gained a firm grasp of magic at a young age.<br>She uses various elements to dispatch her enemies from a distance.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=31" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_31.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_31.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_31.png?v=1" alt="Witch" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_31.png?v=1" alt="Witch" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_31.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_31.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_31.png" alt="Witch" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_31.png" alt="Witch" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="DARK_KNIGHT" class="character_item character_27" data-dot="<button type='button' role='button'><span class='blind'>Dark Knight</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Dark Knight</h3>
                        <span class="class_desc">Dark Knight is a melee fighter that wields the lethal yet beautiful Kriegsmesser.<br>She combusts spirits to infuse her attacks with their power.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=27" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_27.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_27.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_27.png?v=1" alt="Dark Knight" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_27.png?v=1" alt="Dark Knight" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_27.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_27.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_27.png" alt="Dark Knight" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_27.png" alt="Dark Knight" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="STRIKER" class="character_item character_19" data-dot="<button type='button' role='button'><span class='blind'>Striker</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Striker</h3>
                        <span class="class_desc">Striker is a melee fighter who uses his body as a deadly weapon.<br>Armed with gauntlets as weapons, his fists pulverize enemies<br>in hand-to-hand combat.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=19" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_19.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_19.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_19.png?v=1" alt="Striker" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_19.png?v=1" alt="Striker" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_19.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_19.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_19.png" alt="Striker" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_19.png" alt="Striker" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="MYSTIC" class="character_item character_23" data-dot="<button type='button' role='button'><span class='blind'>Mystic</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Mystic</h3>
                        <span class="class_desc">Mystic is a hand-to-hand brawler who rushes headlong into a fight.<br>Her mastery of martial arts lets her command any battle.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=23" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_23.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_23.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_23.png?v=1" alt="Mystic" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_23.png?v=1" alt="Mystic" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_23.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_23.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_23.png" alt="Mystic" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_23.png" alt="Mystic" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="ARCHER" class="character_item character_29" data-dot="<button type='button' role='button'><span class='blind'>Archer</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Archer</h3>
                        <span class="class_desc">Archer is an agile ranged class that shoots enemies from a distance.<br>His grace on the battlefield ensures enemies are dead before he's ever touched.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=29" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_29.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_29.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_29.png?v=1" alt="Archer" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_29.png?v=1" alt="Archer" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_29.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_29.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_29.png" alt="Archer" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_29.png" alt="Archer" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="LAHN" class="character_item character_11" data-dot="<button type='button' role='button'><span class='blind'>Lahn</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Lahn</h3>
                        <span class="class_desc">Lahn is a melee fighter whose crescent pendulum allows her<br>to lash out at lightning speed. She can take on whole hordes<br>of enemies with dazzling grace.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=11" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_11.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_11.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_11.png?v=1" alt="Lahn" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_11.png?v=1" alt="Lahn" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_11.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_11.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_11.png" alt="Lahn" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_11.png" alt="Lahn" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="SHAI" class="character_item character_17" data-dot="<button type='button' role='button'><span class='blind'>Shai</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Shai</h3>
                        <span class="class_desc">Shai is a support class that has both combat and support abilities with powerful team buffs.<br>She can ride her florang to glide in and out of battle.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=17" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_17.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_17.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_17.png?v=1" alt="Shai" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_17.png?v=1" alt="Shai" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_17.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_17.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_17.png" alt="Shai" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_17.png" alt="Shai" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="GUARDIAN" class="character_item character_5" data-dot="<button type='button' role='button'><span class='blind'>Guardian</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Guardian</h3>
                        <span class="class_desc">Guardian is a melee fighter who wields shield and battle axe<br>to crush her enemies with heavy strikes.<br>She is as merciless as the mountain she hails from.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=5" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_5.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_5.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_5.png?v=1" alt="Guardian" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_5.png?v=1" alt="Guardian" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_5.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_5.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_5.png" alt="Guardian" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_5.png" alt="Guardian" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="" class="character_item character_1" data-dot="<button type='button' role='button'><span class='blind'>Hashashin</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Hashashin</h3>
                        <span class="class_desc">Hashashin is a mid-range fighter who wields the power of the sands<br/>to do his bidding. Enemies caught off-guard are quickly dispatched<br/>by his shamshir.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=1" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_1.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_1.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_1.png?v=1" alt="Hashashin" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_1.png?v=1" alt="Hashashin" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_1.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_1.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_1.png" alt="Hashashin" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_1.png" alt="Hashashin" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="" class="character_item character_9" data-dot="<button type='button' role='button'><span class='blind'>Nova</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Nova</h3>
                        <span class="class_desc">Nova is a mid-range fighter who wields a massive tower shield and morning star.<br>She can summon spirit guards to multiply her strength and shore up her defenses.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=9" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_9.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_9.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_9.png?v=1" alt="Nova" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_9.png?v=1" alt="Nova" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_9.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_9.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_9.png" alt="Nova" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_9.png" alt="Nova" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="" class="character_item character_2" data-dot="<button type='button' role='button'><span class='blind'>Sage</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Sage</h3>
                        <span class="class_desc">Sage is a ranged caster who wields the cube-shaped kyve.<br />This ancient weapon manipulates time and space to call forth<br />an array of powerful, offensive magics.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=2" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_2.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_2.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_2.png?v=1" alt="Sage" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_2.png?v=1" alt="Sage" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_2.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_2.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_2.png" alt="Sage" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_2.png" alt="Sage" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="" class="character_item character_10" data-dot="<button type='button' role='button'><span class='blind'>Corsair</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Corsair</h3>
                        <span class="class_desc">Corsair is a melee fighter who can transform into a Mermaid to summon the tides, <br>while brandishing her flexible blade and rope to deal spontaneous attacks.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=10" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_10.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_10.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_10.png?v=1" alt="Corsair" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_10.png?v=1" alt="Corsair" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_10.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_10.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_10.png" alt="Corsair" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_10.png" alt="Corsair" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="DRAKANIA" class="character_item character_7" data-dot="<button type='button' role='button'><span class='blind'>Drakania</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Drakania</h3>
                        <span class="class_desc">Drakania is a melee class that can steal the energy of her opponents,<br /> then releases it to her two-handed sword Slayer to inflict a powerful blow.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=7" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_7.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_7.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_7.png?v=1" alt="Drakania" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_7.png?v=1" alt="Drakania" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_7.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_7.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_7.png" alt="Drakania" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_7.png" alt="Drakania" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
                <section id="WOOSA" class="character_item character_30" data-dot="<button type='button' role='button'><span class='blind'>Woosa</span></button>">
                <div class="classes">
                    <div class="class_desc_wrap">
                        <h3 class="class_name">Woosa</h3>
                        <span class="class_desc">A fan-wielding mid- to melee range class, <br />Woosa summons butterflies, wind, and flows like water.</span>
                        <a href="https://www.sea.playblackdesert.com/en-US/GameInfo/Class?classType=30" class="btn_more">Learn More</a>
                    </div>
                </div>
                <div class="class_character">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_30.png?v=1">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_30.png?v=1">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_30.png?v=1" alt="Woosa" class="owl-lazy main-pc" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_30.png?v=1" alt="Woosa" class="owl-lazy main-m" width="1920" height="880" onload="this.parentElement.parentElement.classList.add('on')" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                <div class="class_symbol">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 768px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_30.png">
                        <source class="owl-lazy" media="(max-width: 767px)" data-srcset="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_30.png">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/main_character_class_symbol_30.png" alt="Woosa" class="owl-lazy main-pc" onerror="this.remove();" loading="lazy">
                        <img data-src="https://s1.pearlcdn.com/SEA/contents/img/portal/main/m_main_character_class_symbol_30.png" alt="Woosa" class="owl-lazy main-m" onerror="this.remove();" loading="lazy">
                    </picture>
                </div>
                </section>
            </section>
            <div class="thumb_nail_area">
                <button type="button" id="downloadBtnClass" class="class_play btn btn_mid4 btn_deepyellow hover_ripple js-gameStart" data-registry="pearlabyss-bdo-SEA"><span class="hover_ripple_text">Play Now</span></button>
                <ul>
                <li class="active">
                    <button data-name="WARRIOR" class="thumb_character_btn character_0 js-thumbBtn" data-idx="0"><span class="blind">Warrior</span></button>
                </li>
                <li>
                    <button data-name="RANGER" class="thumb_character_btn character_4 js-thumbBtn" data-idx="4"><span class="blind">Ranger</span></button>
                </li>
                <li>
                    <button data-name="SORCERER" class="thumb_character_btn character_8 js-thumbBtn" data-idx="8"><span class="blind">Sorceress</span></button>
                </li>
                <li>
                    <button data-name="GIANT" class="thumb_character_btn character_12 js-thumbBtn" data-idx="12"><span class="blind">Berserker</span></button>
                </li>
                <li>
                    <button data-name="TAMER" class="thumb_character_btn character_16 js-thumbBtn" data-idx="16"><span class="blind">Tamer</span></button>
                </li>
                <li>
                    <button data-name="MUSA" class="thumb_character_btn character_20 js-thumbBtn" data-idx="20"><span class="blind">Musa</span></button>
                </li>
                <li>
                    <button data-name="MAEHWA" class="thumb_character_btn character_21 js-thumbBtn" data-idx="21"><span class="blind">Maehwa</span></button>
                </li>
                <li>
                    <button data-name="VALKYRIE" class="thumb_character_btn character_24 js-thumbBtn" data-idx="24"><span class="blind">Valkyrie</span></button>
                </li>
                <li>
                    <button data-name="KUNOICHI" class="thumb_character_btn character_25 js-thumbBtn" data-idx="25"><span class="blind">Kunoichi</span></button>
                </li>
                <li>
                    <button data-name="NINJA" class="thumb_character_btn character_26 js-thumbBtn" data-idx="26"><span class="blind">Ninja</span></button>
                </li>
                <li>
                    <button data-name="WIZARD" class="thumb_character_btn character_28 js-thumbBtn" data-idx="28"><span class="blind">Wizard</span></button>
                </li>
                <li>
                    <button data-name="WITCH" class="thumb_character_btn character_31 js-thumbBtn" data-idx="31"><span class="blind">Witch</span></button>
                </li>
                <li>
                    <button data-name="DARK_KNIGHT" class="thumb_character_btn character_27 js-thumbBtn" data-idx="27"><span class="blind">Dark Knight</span></button>
                </li>
                <li>
                    <button data-name="STRIKER" class="thumb_character_btn character_19 js-thumbBtn" data-idx="19"><span class="blind">Striker</span></button>
                </li>
                <li>
                    <button data-name="MYSTIC" class="thumb_character_btn character_23 js-thumbBtn" data-idx="23"><span class="blind">Mystic</span></button>
                </li>
                <li>
                    <button data-name="ARCHER" class="thumb_character_btn character_29 js-thumbBtn" data-idx="29"><span class="blind">Archer</span></button>
                </li>
                <li>
                    <button data-name="LAHN" class="thumb_character_btn character_11 js-thumbBtn" data-idx="11"><span class="blind">Lahn</span></button>
                </li>
                <li>
                    <button data-name="SHAI" class="thumb_character_btn character_17 js-thumbBtn" data-idx="17"><span class="blind">Shai</span></button>
                </li>
                <li>
                    <button data-name="GUARDIAN" class="thumb_character_btn character_5 js-thumbBtn" data-idx="5"><span class="blind">Guardian</span></button>
                </li>
                <li>
                    <button data-name="" class="thumb_character_btn character_1 js-thumbBtn" data-idx="1"><span class="blind">Hashashin</span></button>
                </li>
                <li>
                    <button data-name="" class="thumb_character_btn character_9 js-thumbBtn" data-idx="9"><span class="blind">Nova</span></button>
                </li>
                <li>
                    <button data-name="" class="thumb_character_btn character_2 js-thumbBtn" data-idx="2"><span class="blind">Sage</span></button>
                </li>
                <li>
                    <button data-name="" class="thumb_character_btn character_10 js-thumbBtn" data-idx="10"><span class="blind">Corsair</span></button>
                </li>
                <li>
                    <button data-name="DRAKANIA" class="thumb_character_btn character_7 js-thumbBtn" data-idx="7"><span class="blind">Drakania</span></button>
                </li>
                <li>
                    <button data-name="WOOSA" class="thumb_character_btn character_30 js-thumbBtn" data-idx="30"><span class="blind">Woosa</span></button>
                </li>
                </ul>
            </div>
        </section>
        <div class="multi_wrap">
            <section class="media_wrap">
                <div class="media_subject">
                <h2 class="section_title bold">Media</h2>
                <p class="section_desc">Enjoy the beautiful remastered world of Black Desert through videos and images.</p>
                </div>
                <div class="media_list_area owl-carousel js-mediaSlider js-scrollAni">
                <div class="media_thumb_wrap js-mediaThumbWrap js-firstSlider">
                    <button type="button" class="media_thumb view_movie js-viewPop" attr-img="https://www.youtube.com/embed/nvK1k4TIg8A?rel=0" attr-type="video" attr-idx="0">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/RC6W0VHQQDK0E3XA20221211131833190.923x522.jpg" alt="New Class - Woosa" attr-img="https://www.youtube.com/embed/nvK1k4TIg8A?rel=0" class="media_thumb_large" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/RC6W0VHQQDK0E3XA20221211131833190.400x225.jpg" alt="New Class - Woosa" attr-img="https://www.youtube.com/embed/nvK1k4TIg8A?rel=0" class="media_thumb_small" loading="lazy">
                    </button>
                </div>
                <div class="media_thumb_wrap js-mediaThumbWrap">
                    <button type="button" class="media_thumb view_img js-viewPop " attr-img="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/b25a594be0320221019142121735.jpg" attr-img_m="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/ef738d9842120221019142123594.jpg" attr-type="image" attr-idx="1">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/P9SUXOOGV0HD582P20221019142122245.923x522.jpg" alt="" class="media_thumb_large" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/P9SUXOOGV0HD582P20221019142122245.400x225.jpg" alt="" class="media_thumb_small" loading="lazy">
                    </button>
                </div>
                <div class="media_thumb_wrap js-mediaThumbWrap">
                    <button type="button" class="media_thumb view_img js-viewPop " attr-img="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/c0a6c07ea0920221019141949752.jpg" attr-img_m="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/75c8aeae61220221019141951459.jpg" attr-type="image" attr-idx="2">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/8FU1U03GS0GLM1NM20221019141950234.923x522.jpg" alt="" class="media_thumb_large" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/8FU1U03GS0GLM1NM20221019141950234.400x225.jpg" alt="" class="media_thumb_small" loading="lazy">
                    </button>
                </div>
                <div class="media_thumb_wrap js-mediaThumbWrap">
                    <button type="button" class="media_thumb view_img js-viewPop " attr-img="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/80515f228c920220112085045072.jpg" attr-img_m="" attr-type="image" attr-idx="3">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/19DODKNENVTXUC7P20220112085045572.923x522.jpg" alt=" " class="media_thumb_large" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/19DODKNENVTXUC7P20220112085045572.400x225.jpg" alt=" " class="media_thumb_small" loading="lazy">
                    </button>
                </div>
                <div class="media_thumb_wrap js-mediaThumbWrap">
                    <button type="button" class="media_thumb view_img js-viewPop js-lastSlider" attr-img="https://s1.pearlcdn.com/SEA/Upload/WALLPAPER/6ef1e3749a820220112085020545.jpg" attr-img_m="" attr-type="image" attr-idx="4">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/2OBAQZ8KS5AQZMZL20220112085021030.923x522.jpg" alt="  " class="media_thumb_large" loading="lazy">
                    <img src="https://s1.pearlcdn.com/SEA/Upload/thumbnail/2022/2OBAQZ8KS5AQZMZL20220112085021030.400x225.jpg" alt="  " class="media_thumb_small" loading="lazy">
                    </button>
                </div>
                </div>
            </section>
            <section class="download_wrap">
                <div class="download_subject">
                <h2 class="section_title bold">Embark on your adventure.</h2>
                </div>
                <div class="downalod_btn_wrap">
                <button type="button" id="downloadBtn" class="story_play btn_mid4 btn_deepyellow hover_ripple js-gameStart" data-registry="pearlabyss-bdo-SEA"><span class="hover_ripple_text">Play Now</span></button>
                </div>
            </section>
        </div>
    </article>
</div>
@endsection