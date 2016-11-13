# Android Push Notification & Deep Links

This repository is a boilerplate to get push notifications and deep links right by using this structure.

## PUSH NOTIFICATIONS

### Step 1: Register Push Notification 

- Visit https://console.firebase.google.com
- Create a project or load and existing one. If it's a new project follow the steps.
- Download the **google-services.json** file and place it in the same folder as your app's (app, not project) build.gradle file. 
- Click the **Manage** option for your project in Firebase. 
- Visit the **Cloud Messaging** tab in Firebase. API keys will be there. Copy them and proceed to next step.

### Step 2: Register the App in Google Play and allow Pushes.

- Then visit Google Developer Console (https://play.google.com/apps/publish/).
- Select your App, go to **Services and API** and click. 
- You must upload an APK or at least create the Store Entry in order to be capable of sending push notifications.
- You will see a **Firebase Cloud Messaging** (FCM) button. Enter the API keys there.

## Test script for Push Notifications

---

## DEEP LINKS

### Step 1: Define in AndroidManifest the entry points

### Step 2: Edit Push to include Deeplink

### Step 3: Define Deeplink

### Step 4: Parse Deeplink and route


--------

- https://inducesmile.com/android/android-push-notifications-using-google-cloud-messaging-gcm-php-mysql-and-okhttp-square-open-source/

- http://tannerperrien.com/deep-linking-in-android/
- https://github.com/nilportugues/android-deep-link-example/blob/master/example/src/main/java/com/tannerperrien/example/deeplink/MainActivity.java
