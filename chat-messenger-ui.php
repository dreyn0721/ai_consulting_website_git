<template id="typing-template">
  <div class="chat-message bot typing">
    <span></span>
    <span></span>
    <span></span>
  </div>
</template>

	<div id="chat-toggle">
	  🤖
	</div>

	<!-- Chatbox -->
	<div id="chatbox">
	  <div class="chat-header">
	    <div class="chat-title">
	      <span class="dot"></span> AI Assistant
	    </div>
	    <button id="close-chat">✕</button>
	  </div>

	  <div id="chat-messages"></div>

	  <div class="chat-input">
	    <input type="text" id="user-input" placeholder="Ask me anything..." />
	    <button onclick="sendMessage()">➤</button>
	  </div>
	</div>


	<script>


	const toggle = document.getElementById("chat-toggle");
	const chatbox = document.getElementById("chatbox");
	const closeBtn = document.getElementById("close-chat");
	const messages = document.getElementById("chat-messages");

	let introShown = false;

	function showIntro() {
	  if (introShown) return;

	  const introText =
	    "👋 Hi! I’m your AI assistant.\n" +
	    "I can help answer questions and guide you.\n" +
	    "How can I help you today?";

	  addMessage(introText, "bot");
	  introShown = true;
	}

	toggle.onclick = () => {
	  chatbox.style.display = "flex";
	  setTimeout(showIntro, 500); // slight delay for smooth UX
	};

	closeBtn.onclick = () => {
	  chatbox.style.display = "none";
	};

	function addMessage(text, sender) {
	  const msgContainer = document.createElement("div");
	  const msg = document.createElement("div");
	  msg.textContent = text;
	  msg.className = sender === "user" ? "msg-from-user" : "msg-from-bot";
	  msg.style.textAlign = sender === "user" ? "right" : "left";




	  const auth = document.createElement("p");
	  auth.textContent = sender === "user" ? "You:" : "AI Assistant:";
	  auth.style.margin = "10px 0 0 0";
	  auth.style.textAlign = sender === "user" ? "right" : "left";
	  auth.className = "author";


	  msgContainer.appendChild(auth);

	  msgContainer.appendChild(msg);
	  messages.appendChild(msgContainer);
	  messages.scrollTop = messages.scrollHeight;
	}



	async function sendMessage() {
	  const input = document.getElementById("user-input");
	  const message = input.value.trim();
	  if (!message) return;

	  addMessage(message, "user");
	  input.value = "";

	  // Add typing animation
	  const template = document.getElementById("typing-template");
	  const typingIndicator = template.content.cloneNode(true);
	  const typingEl = typingIndicator.firstElementChild;
	  messages.appendChild(typingEl);
	  messages.scrollTop = messages.scrollHeight;

	  const response = await fetch("chat.php", {
	    method: "POST",
	    headers: {
	      "Content-Type": "application/json"
	    },
	    body: JSON.stringify({ message })
	  });

	  const data = await response.json();

	  // Remove typing animation
	  typingEl.remove();

	  //DEV
	  // console.log( data );


	  addMessage(data.reply || "API ERROR: "+ data.error, "bot");
	}
	</script>

	<style type="text/css">
		/*//////////////////////////////////////////////*/
		#chat-toggle {
		  position: fixed;
		  bottom: 24px;
		  right: 24px;
		  width: 60px;
		  height: 60px;
		  border-radius: 50%;
		  background: linear-gradient(135deg, #1e3c72, #2a5298);
		  color: white;
		  font-size: 26px;
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  cursor: pointer;
		  box-shadow: 0 15px 35px rgba(0,0,0,0.3);
		}

		#chatbox {
		  position: fixed;
		  bottom: 100px;
		  right: 24px;
		  width: 360px;
		  height: 520px;
		  background: rgba(255,255,255,0.95);
		  backdrop-filter: blur(10px);
		  border-radius: 16px;
		  box-shadow: 0 30px 60px rgba(0,0,0,0.25);
		  display: none;
		  flex-direction: column;
		  overflow: hidden;
		}

		.chat-header {
		  background: linear-gradient(135deg, #1e3c72, #2a5298);
		  color: white;
		  padding: 16px;
		  display: flex;
		  justify-content: space-between;
		  align-items: center;
		}

		.chat-title {
		  font-weight: 600;
		  font-size: 15px;
		  display: flex;
		  align-items: center;
		  gap: 8px;
		}

		.chat-title .dot {
		  width: 8px;
		  height: 8px;
		  background: #4caf50;
		  border-radius: 50%;
		}

		#close-chat {
		  background: transparent;
		  border: none;
		  color: white;
		  font-size: 18px;
		  cursor: pointer;
		}

		#chat-messages {
		  flex: 1;
		  padding: 16px;
		  overflow-y: auto;
		  display: flex;
		  flex-direction: column;
		  gap: 12px;
		  font-size: 14px;
		}

		.chat-message {
		  max-width: 80%;
		  padding: 10px 14px;
		  border-radius: 14px;
		  line-height: 1.4;
		}

		.chat-message.user {
		  align-self: flex-end;
		  background: #2a5298;
		  color: white;
		  border-bottom-right-radius: 4px;
		}

		.chat-message.bot {
		  align-self: flex-start;
		  background: #f1f3f6;
		  color: #333;
		  border-bottom-left-radius: 4px;
		}

		.chat-input {
		  display: flex;
		  padding: 12px;
		  border-top: 1px solid #244786;
		  gap: 8px;
		}

		.chat-input input {
		  flex: 1;
		  padding: 10px 12px;
		  border-radius: 5px;
		  border: 1px solid #244786;
		  font-size: 14px;
		}
		.chat-input input:focus{
		  outline: none;
		}

		.chat-input button {
		  width: 42px;
		  border-radius: 10px;
		  border: none;
		  background: #2a5298;
		  color: white;
		  font-size: 16px;
		  cursor: pointer;
		}





		.chat-message.typing {
		  background: #f1f3f6;
		  width: fit-content;
		  padding: 12px 16px;
		  display: flex;
		  gap: 6px;
		}

		.chat-message.typing span {
		  width: 6px;
		  height: 6px;
		  background: #999;
		  border-radius: 50%;
		  animation: typing 1.4s infinite ease-in-out;
		}

		.chat-message.typing span:nth-child(1) {
		  animation-delay: 0s;
		}
		.chat-message.typing span:nth-child(2) {
		  animation-delay: 0.2s;
		}
		.chat-message.typing span:nth-child(3) {
		  animation-delay: 0.4s;
		}


		#chat-messages .author{
		}

		#chat-messages .msg-from-user{
			color: #fff;
			background: #2A5298;
			border: solid 1px #000;
			border-radius: 10px;
			padding: 10px;
			display: inline-block;
			float: right;
		}

		#chat-messages .msg-from-bot{
			color: #2A5298;
			background: white;
			border: solid 1px #2A5298;
			border-radius: 10px;
			padding: 10px;
			display: inline-block;
		}

		@keyframes typing {
		  0% { opacity: 0.3; transform: translateY(0); }
		  50% { opacity: 1; transform: translateY(-3px); }
		  100% { opacity: 0.3; transform: translateY(0); }
		}


		/*//////////////////////////////////////////////*/
	</style>