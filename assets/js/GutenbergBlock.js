wp.blocks.registerBlockType('rahgozar/custom-block', {
    title: 'متن ساز رهگذر',
    icon: '../images/icon.png',
    description: 'description',
    category: 'text',

    attributes: {
        rahgozar_text: {
            type: 'string',
            default: 'رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است، که در طرح های اولیه گرافیکی و پیاده سازی اولیه وب سایت ها استفاده می‌شود. رهگذر در مورد همه چیز اطلاعات دارد از صنعت چاپ سنتی و صنعتی گرفته تا تکنولوژی‌های روز دنیا که هرکدام کاربردهای مختلفی دارند که هدف اصلی هریک بهبود شرایط زندگی شماست. رهگذر کتابهای زیادی درباره‌ی نرم افزارهای مختلف خوانده است و می‌تواند راهنمای خوبی برای طراحان فارسی زبان باشد. طراحان می‌توانند امید داشته باشند که با پیشرفت دنیای تکنولوژی شرایط و مشکلات سخت در حوزه‌ی کاریشان به پایان برسد.'
        }
    },

    edit: function (props) {

        function updateRahgozarText(event) {
            props.setAttributes({
                rahgozar_text: event.target.value
            })
        }

        return React.createElement("div", {
                class: "rahgozar_block_editor"
            },
            React.createElement("label", {
                class: "rahgozar_block_label",
                for: "rahgozar_block_review"
            }, "متن ساز رهگذر"),
            React.createElement("br", null),
            React.createElement("textarea", {
                class: "rahgozar_block_textarea",
                id: "rahgozar_block_review",
                name: "rahgozar_block",
                rows: "8",
                cols: "100",
                onChange: updateRahgozarText
            }, props.attributes.rahgozar_text));
    },

    save: function (props) {
        return React.createElement("div", {
            class: "rahgozar_block"
        }, React.createElement("p", {
            class: "rahgozar_text"
        }, props.attributes.rahgozar_text));
    }
});