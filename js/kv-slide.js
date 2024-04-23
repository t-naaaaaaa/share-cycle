let currentIndex = 0;
const images = document.querySelectorAll(".image-gallery .image-item");
const totalImages = images.length;
const container = document.querySelector(".image-gallery .container");

// 最初の画像と最後の画像をクローンして追加
const firstImageClone = images[0].cloneNode(true);
const lastImageClone = images[totalImages - 1].cloneNode(true);
container.appendChild(firstImageClone);
container.insertBefore(lastImageClone, images[0]);

// コンテナーの位置をクローンされた最後の画像に設定
container.style.transform = `translateX(-${100}%)`;

function slideImages() {
  currentIndex++;
  container.style.transition = "transform 1.5s ease-out";
  container.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`;

  if (currentIndex === totalImages) {
    // トランジションが終了した後に、トランジションを無効にして最初の画像の位置に瞬間的に移動
    setTimeout(() => {
      container.style.transition = "none"; // トランジションを無効化
      currentIndex = 0; // インデックスを最初に戻す
      container.style.transform = `translateX(-${100}%)`; // 最初の実際の画像位置に戻す
    }, 1500); // トランジションの時間と合わせる
  }
}

setInterval(slideImages, 6000); // 6秒ごとに画像をスライドさせる
