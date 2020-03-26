let vm = new Vue({
    el: "#register",
    data: {
        title: "管理员注册界面",
        formDatas: [
            {
                username: {
                    name: "用户名",
                    type: "text",
                    id: "username",
                    placeholder: "请输入登陆名"
                }
            },
            {
                password: {
                    name: "密码",
                    type: "password",
                    id: "password",
                    placeholder: "请输入密码"
                }
            },
            {
                "confirm-password": {
                    name: "确认密码",
                    type: "password",
                    id: "password",
                    placeholder: "再次输入密码"
                }
            }
        ],
        captchaUrl: "http://think.y746.com/captcha?t=" + Math.random()
    },
    methods: {
        captchaUrlPush: function() {
            let url = "http://think.y746.com/captcha?t=" + Math.random();
            this.captchaUrl = url;
        }
    }
});
