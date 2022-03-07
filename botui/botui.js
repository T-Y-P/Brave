var botui = new BotUI("botui");
    botui.message.bot({
        delay: 1200,
        content: "hi，欢迎来到这里😄"
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "我是聊天机器人"
        })
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "这里只是测试页"
        })
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "想使用聊天机器人请修改about-us.php中的botui.js文件"
        })
    }).then(function() {
        return botui.message.bot({
            delay: 1500,
            content: "配置教程：https://docs.botui.org/"
        })
    })
