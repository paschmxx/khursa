<?php
function renderArticle($articles){
    foreach ($articles as $article){
        $title = isset($article['title']) ? $article['title'] : '';
        $description = isset($article['description']) ? $article['description'] : '';
        $btnText = isset($article['button-text']) ? $article['button-text'] : '';
        $btnLink = isset($article['button-link']) ? $article['button-link'] : '';
        $image = isset($article['image']) ? $article['image'] : '';
        ?>
        <div class="media__box">
            <div class="media__info">
                <d>
                    <div class="media__title">
                        <?php echo $title; ?>
                    </div>
                    <div class="media__text">
                        <?php echo $description; ?>
                    </div>
                    <button class="media__btn" data-href=" <?php echo $btnLink; ?>">
                        <?php echo $btnText; ?>
                    </button>
            </div>
            <?php if(!!$image){ ?>
                <img class="media__img" src="<?php echo $image; ?>" alt="Music">
            <?php } ?>
        </div>
        <?php
    }

}