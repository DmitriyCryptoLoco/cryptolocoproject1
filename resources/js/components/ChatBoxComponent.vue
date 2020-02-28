<!-- resources/js/components/ChatBoxComponent.vue -->
<template>
    <div class="card-body">
        <div id="chatbox" v-if="users">
            <dl v-for="message in messages" :key="message.id">
                <dt v-if="message.id"><i> ({{ formatTime(message.timestamp) }}) </i> : <strong>{{ findSender(message.senderId).name }}</strong></dt>
                <dd>{{ message.text }}</dd>
            </dl>
        </div>
        <hr>
        <div class="input-group">
            <input type="text" v-model="message" @keyup.enter="sendMessage" class="form-control" placeholder="Type your message..." autofocus>
            <div class="input-group-append">
                <button @click="sendMessage" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</template>

 <style>
    #chatbox {
        text-align: left;
        max-height: 400px;
        overflow-y: scroll;
    }
</style>
