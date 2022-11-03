# Blog Practice

## <span style="color:F17459">Contents
[Admin](#Admin)

[Articles](#Articles)

[Users](#Users)

[Mails](#Mails)

[Collections](#Collections)

[Requests](#Requests)

[Relations](#Relations)

## <span style="color:F17459">Admin
```http://{{route}}/admin/```
- GET Admin 後台登入頁面(Account/Password = admin)

## <span style="color:F17459">Articles
```http://{{route}}/api/articles/```
- GET 回傳所有文章
- POST 上傳新文章

```http://{{route}}/api/articles/{id}```
- GET 獲取特定文章
- put: 更新特定文章
- delete: 軟刪除特定文章(soft delete)

```http://{{route}}/api/articles/search```
- POST 搜尋文章標題或內容(dispatch search job, return searchId)

```http://{{route}}/api/articles/search?searchId=1```{searchId}
- GET 獲取搜尋結果

## <span style="color:F17459">Users
```http://{{route}}/api/users```
- POST 創建使用者

```http://{{route}}/api/users/verify/{verifyCode}```
- GET 驗證使用者信箱

```http://{{route}}/api/users/authenticate```
- POST 使用者登入

```http://{{route}}/api/users/logout```
- POST 使用者登出

## <span style="color:F17459">Mails
```http://{{route}}/api/mails/verify```
- POST發送使用者驗證信

## <span style="color:F17459">Collections
> (Data resources from Reddit, funny category)
```http://{{route}}/api/collection/```
- GET 取Reddit funny類文章第一頁

```http://{{route}}/api/collection/filter```
- GET 篩選限制級的文章

```http://{{route}}/api/collection/pluck```
- GET 擷取所有有圖文章的圖片

```http://{{route}}/api/collection/contains```
- GET 擷取所有包含圖片的文章，並轉址到pluck (顯示結果會與pluck一致)

```http://{{route}}/api/collection/groupby```
- GET 將文章根據POST_hint分類

```http://{{route}}/api/collection/sortby```
- GET 將文章根據留言數排列，從小到大，只顯示標題與留言數

```http://{{route}}/api/collection/partition```
- GET 將文章切成限制級文章與一般文章兩群

```http://{{route}}/api/collection/reject```
- GET 排除讚數小於10000的文章，再將讚數/標題做成key/value pair

```http://{{route}}/api/collection/where```
- GET 選出POST_hint為image的文章

```http://{{route}}/api/collection/wherein```
- GET 選出POST_hint為image或host:video的文章

```http://{{route}}/api/collection/chunk```
- GET 每兩篇文章做成一個群組

```http://{{route}}/api/collection/count```
- GET 計算總共有幾篇文章

```http://{{route}}/api/collection/first```
- GET 只取第一筆讚數大於10000的文章

```http://{{route}}/api/collection/firstwhere```
- GET 取第一筆讚數大於1000的文章(精簡語法)

```http://{{route}}/api/collection/tap```
- GET 不影響邏輯之下，輸出collection過程的資料，資料存在laravel.log裡面

## <span style="color:F17459">Requests
```http://{{route}}/api/request/```
- POST 給request資料{method, url, options}，api會幫回傳api取回的資料

## <span style="color:F17459">Relations
```http://{{route}}/api/relation/countryPOSTs?countryId=1```
- GET 獲取指定國家的所有文章，關係（國家->使用者->貼文）

```http://{{route}}/api/relation/userPhotos?articleId=1```
- GET 從對應表拿使用者所有的照片

```http://{{route}}/api/relation/articlePhotos?userId=1```
- GET 從對應表拿文章所有的照片

```http://{{route}}/api/relation/photoImagables?photoId=1```
- GET 從照片反推使用對象

```http://{{route}}/api/relation/articleTags?articleId=1```
- GET 找出文章的所有Tag

```http://{{route}}/api/relation/videoTags?videoId=1```
- GET 找出影片的所有Tag

```http://{{route}}/api/relation/tagTaggable?tagId=1```
- GET 從Tag反推使用對象(TODO:有錯誤)
