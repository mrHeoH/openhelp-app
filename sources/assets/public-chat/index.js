import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { useUserStore } from "@public/stores/UserStore";
import { useChatStore } from "@public/stores/ChatStore";
import { useConnectionStore } from "@public/stores/ConnectionStore";
import index from './index.vue'

function init(config) {
    const app = createApp(index)
    app.config.devtools = true;
    app.use(createPinia())

    const user = useUserStore()
    const chat = useChatStore()
    const conn = useConnectionStore()

    user.init(config.user)
    chat.init(config.chat)
    conn.init(config.connection)

    app.provide('customHeaderHtml', config?.customHeaderHtml)
    app.provide('customHeaderElement', config?.customHeaderElement)

    app.mount(document.querySelector(config?.target || '#app'))
    document.querySelector(config?.target || '#app').classList.add('chat');
}

function subscribe(channel)
{
    const conn = useConnectionStore()
    conn.subscribe(channel)
}

window.OpenHelpChat = {
    init,
    subscribe,
}
