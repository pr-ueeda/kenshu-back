<?php
session_start();

if (isset($_POST['signout'])) {
    if (isset($_SESSION['display_name'])) {
        echo 'ログアウトしました。';
    } else {
        echo 'セッションタイムアウト';
    }

    $_SESSION = array();

    @session_destroy();
}

?>

<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="../example.css" rel="stylesheet">
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
        <span class="skiplink-text">Skip to main content</span>
    </div>
</a>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-end align-items-center">
            <div class="col-4 text-center">
                <!-- <a class="blog-header-logo text-dark" href="#">Large</a> -->
                <a class="blog-header-logo text-dark" href="#">記事投稿サイト</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <strong class="text-success"><?php echo $_SESSION['display_name'] ?></strong>
                <div class="col-4 pt-1">
                    <?php if ($_SESSION['display_name'] != '') :?>
                    <form method="post">
                        <button name="signout" id="signout" type="submit" class="btn btn-info">ログアウト</button>
                    </form>
                    <?php else : ?>
                    <a class="text-muted" href="/signin/signin.php">ログイン</a>
                    <a class="btn btn-sm btn-outline-secondary" href="/signup/signup.php">サインアップ</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <!-- <h1 class="display-4 font-italic">Title of a longer featured blog post</h1> -->
            <h1 class="display-4 font-italic">人気のブログポストのタイトル</h1>
            <!-- <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p> -->
            <p class="lead my-3">前置きとなる数行の文を書きます。新しい読者にこのポストの何が最も面白いかを早く効率よく伝えましょう。</p>
            <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">続きを読む</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                    <strong class="d-inline-block mb-2 text-primary">国際</strong>
                    <h3 class="mb-0">
                        <!-- <a class="text-dark" href="#">Featured post</a> -->
                        <a class="text-dark" href="#">人気のポスト</a>
                    </h3>
                    <!-- <div class="mb-1 text-muted">Nov 12</div> -->
                    <div class="mb-1 text-muted">11/12</div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <p class="card-text ml-auto">これは写真の解説文付きのカードです。自然に説明を加えることができます。</p>
                    <!-- <a href="#">Continue reading</a> -->
                    <a href="#">続きを読む</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17201b29e6e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17201b29e6e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
                    <strong class="d-inline-block mb-2 text-success">デザイン</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">ポストのタイトル</a>
                    </h3>
                    <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                    <div class="mb-1 text-muted">11/11</div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <p class="card-text ml-auto">これは写真の解説文付きのカードです。自然に説明を加えることができます。</p>
                    <!-- <a href="#">Continue reading</a> -->
                    <a href="#">続きを読む</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17201b29e6f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17201b29e6f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
    </div>
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>

            <div class="blog-post">
                <!-- <h2 class="blog-post-title">Sample blog post</h2> -->
                <h2 class="blog-post-title">サンプルブログポスト</h2>
                <!-- <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> -->
                <p class="blog-post-meta">2014/01/01 by <a href="#">太郎</a></p>

                <!-- <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p> -->
                <p>このブログポストは Bootstrap のスタイルを用いて作られた数種類の異なるタイプのコンテンツを含んでいます。基本のタイポグラフィ, 画像, コードはすべてサポートされています。</p>
                <hr>
                <!-- <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p> -->
                <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも <a href="#">薄暗いじめじめした所</a>でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。</p>
                <blockquote>
                    <!-- <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                    <p>しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ<strong>彼の掌に載せられてスーと持ち上げられた時</strong>何だかフワフワした感じがあったばかりである。</p>
                </blockquote>
                <!-- <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> -->
                <p>掌の上で少し落ちついて書生の顔を見たのが<em>いわゆる人間というものの見始</em>であろう。この時妙なものだと思った感じが今でも残っている。</p>
                <!-- <h2>Heading</h2> -->
                <h2>見出し</h2>
                <!-- <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p> -->
                <p>第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。</p>
                <!-- <h3>Sub-heading</h3> -->
                <h3>サブの見出し</h3>
                <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> -->
                <!-- <pre><code>Example code block</code></pre> -->
                <pre><code>コードブロックの例</code></pre>
                <!-- <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p> -->
                <p>しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。</p>
                <!-- <h3>Sub-heading</h3> -->
                <h3>サブの見出し</h3>
                <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
                <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。</p>
                <ul>
                    <!-- <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li> -->
                    <li>この書生というのは時々我々を捕えて煮て食うという話である。</li>
                    <!-- <li>Donec id elit non mi porta gravida at eget metus.</li> -->
                    <li>しかしその当時は何という考もなかったから別段恐しいとも思わなかった。</li>
                    <!-- <li>Nulla vitae elit libero, a pharetra augue.</li> -->
                    <li>ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。</li>
                </ul>
                <!-- <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p> -->
                <p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。</p>
                <ol>
                    <!-- <li>Vestibulum id ligula porta felis euismod semper.</li> -->
                    <li>この時妙なものだと思った感じが今でも残っている。</li>
                    <!-- <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li> -->
                    <li>第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。</li>
                    <!-- <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li> -->
                    <li>その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。</li>
                </ol>
                <p>のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <!-- <h2 class="blog-post-title">Another blog post</h2> -->
                <h2 class="blog-post-title">別のブログポスト</h2>
                <!-- <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p> -->
                <p class="blog-post-meta">2013/12/23 by <a href="#">次郎</a></p>

                <!-- <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p> -->
                <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも <a href="#">薄暗いじめじめした所</a>でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。</p>
                <blockquote>
                    <!-- <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                    <p>しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ<strong>彼の掌に載せられてスーと持ち上げられた時</strong>何だかフワフワした感じがあったばかりである。</p>
                </blockquote>
                <!-- <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> -->
                <p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。</p>
                <!-- <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p> -->
                <p>第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <!-- <h2 class="blog-post-title">New feature</h2> -->
                <h2 class="blog-post-title">新しい特徴</h2>
                <!-- <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p> -->
                <p class="blog-post-meta">2013/12/14 by <a href="#">三郎</a></p>

                <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
                <p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。</p>
                <ul>
                    <!-- <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li> -->
                    <li>この書生というのは時々我々を捕えて煮て食うという話である。</li>
                    <!-- <li>Donec id elit non mi porta gravida at eget metus.</li> -->
                    <li>しかしその当時は何という考もなかったから別段恐しいとも思わなかった。</li>
                    <!-- <li>Nulla vitae elit libero, a pharetra augue.</li> -->
                    <li>ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。</li>
                </ul>
                <!-- <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> -->
                <p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。</p>
                <!-- <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p> -->
                <p>第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。</p>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <!-- <a class="btn btn-outline-primary" href="#">Older</a> -->
                <a class="btn btn-outline-primary" href="#">古い記事</a>
                <!-- <a class="btn btn-outline-secondary disabled" href="#">Newer</a> -->
                <a class="btn btn-outline-secondary disabled" href="#">新しい記事</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <!-- <h4 class="font-italic">About</h4> -->
                <h4 class="font-italic">ブログについて</h4>
                <!-- <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> -->
                <p class="mb-0">吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも<em>薄暗いじめじめした所で</em>ニャーニャー泣いていた事だけは記憶している。</p>
            </div>

            <div class="p-3">
                <!-- <h4 class="font-italic">Archives</h4> -->
                <h4 class="font-italic">アーカイブ</h4>
                <ol class="list-unstyled mb-0">
                    <!-- <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li> -->
                    <li><a href="#">2014/03</a></li>
                    <li><a href="#">2014/02</a></li>
                    <li><a href="#">2014/01</a></li>
                    <li><a href="#">2013/12</a></li>
                    <li><a href="#">2013/11</a></li>
                    <li><a href="#">2013/10</a></li>
                    <li><a href="#">2013/09</a></li>
                    <li><a href="#">2013/08</a></li>
                    <li><a href="#">2013/07</a></li>
                    <li><a href="#">2013/06</a></li>
                    <li><a href="#">2013/05</a></li>
                    <li><a href="#">2013/04</a></li>
                </ol>
            </div>

            <div class="p-3">
                <!-- <h4 class="font-italic">Elsewhere</h4> -->
                <h4 class="font-italic">SNS</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main>
<footer class="blog-footer">
    <!-- <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
    <p>
        <!-- <a href="#">Back to top</a> -->
        <a href="#">トップに戻る</a>
    </p>
</footer>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="/docs/4.4/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.4/assets/js/src/application.js"></script>
<script src="/docs/4.4/assets/js/src/search.js"></script>
<script src="/docs/4.4/assets/js/src/ie-emulation-modes-warning.js"></script>
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</body>
</html>
