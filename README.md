![GitHub all releases](https://img.shields.io/github/downloads/Umid-ismayilov/DebugWithTelegram/total)
![GitHub language count](https://img.shields.io/github/languages/count/Umid-ismayilov/DebugWithTelegram)
![GitHub top language](https://img.shields.io/github/languages/top/Umid-ismayilov/DebugWithTelegram?color=yellow)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/Umid-ismayilov/DebugWithTelegram)
![GitHub forks](https://img.shields.io/github/forks/Umid-ismayilov/DebugWithTelegram?style=social)
![GitHub Repo stars](https://img.shields.io/github/stars/Umid-ismayilov/DebugWithTelegram?style=social)

# DebugWithTelegram
Api Debug with telegram
1. Create Telegram bot
![bot](https://user-images.githubusercontent.com/49947736/171563377-2675d331-c074-41dc-afd0-88ff11feaa0c.PNG)

2. Add this bot to any Telegram group. Note: This bot must have Admin Permission from Your Group

3. Find Your chat_id
![update](https://user-images.githubusercontent.com/49947736/171566743-e0413426-8dc8-4271-ab06-4222cbf6ab46.PNG)

4. Add chat_id and token DebugWithTelegram 
5. And you can Debugging in your project. Use `try catch` 

Good luck 

``` php
try {
      ...
}catch(Exception $e) {

  $log = new DebugWithTelegram();
  $log->debug($e->getMessage());

}


