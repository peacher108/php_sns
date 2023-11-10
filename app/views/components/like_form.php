<div class="tweet-nav mb-3">
    <!-- TODO: usersのIDと tweetsのIDを送信 -->
    <form action="/like" method="POST"> <!-- フォームのアクションとメソッドを適切なものに修正 -->
        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
        <input type="hidden" name="tweet_id" value="<?= $tweet['id'] ?>">

        <?php if (in_array($tweet['id'], $user_likes)) : ?>
            <button class="btn btn-sm" name="unlike"><img src="../images/svg/heart_active.svg"></button>
            <!-- unlikeボタンをクリックした場合、サーバーに通知するために name="unlike" を追加 -->
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php else : ?>
            <button class="btn btn-sm" name="like"><img src="../images/svg/heart.svg"></button>
            <!-- likeボタンをクリックした場合、サーバーに通知するために name="like" を追加 -->
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php endif ?>
    </form>
</div>
