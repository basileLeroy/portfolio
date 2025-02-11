const allReviews = [
    {
        id: 1,
        keyword: "Dedicated",
        role: "Former Manager",
        score: 5,
        message: "You are professional and 100% dedicated to your (social) mission."
    },
    {
        id: 2,
        keyword: "Conscientious",
        role: "Former colleague",
        score: 5,
        message: "You entrust Basile with a task and he always provides valuable work."
    },
    {
        id: 3,
        keyword: "Involved",
        role: "Former colleague",
        score: 5,
        message: "Basile is invested in his clients, carefully identifying their needs, and taking the time to listen to their concerns. This results in qualitative work with a strong personal touch."
    },
    {
        id: 4,
        keyword: "inspiring",
        role: "Former student",
        score: 5,
        message: "During the time I got to be a student in Basile's class, he kept the perfect balance of being a great teacher and a helpful friend who you could always count on. He was very punctual, motivating, passionate and knowledgeable."
    },
];

const getMultipleRandomReviews = (originList, ceiling) => {
    let result = new Array(ceiling);
    let length = originList.length;
    let alreadyTaken = new Array(length);

    if (ceiling > length)
        throw new RangeError("getMultipleRandomReviews: more elements taken than available");

    while (ceiling--) {
        let randomIndex = Math.floor(Math.random() * length);
        result[ceiling] = originList[randomIndex in alreadyTaken ? alreadyTaken[randomIndex] : randomIndex];
        alreadyTaken[randomIndex] = --length in alreadyTaken ? alreadyTaken[length] : length
    }

    return result;
}

const createReviewCard = (wrapper, review) => {
    const container = document.createElement("div");
    container.classList.add("review");
    container.id = `review-${review.id}`;

    const top = document.createElement("div");
    top.classList.add("top");
    const topContent = document.createElement('p');
    const keyword = document.createElement('span');
    keyword.classList.add('keyword');
    keyword.textContent = `"${review.keyword}"`;
    const role = document.createElement('span');
    role.classList.add('role');
    role.textContent = ` ~ ${review.role}`;

    topContent.append(keyword, role);

    const stars = document.createElement('div');
    stars.classList.add("stars");

    for (let i = 1; i <= 5; i++) {
        const star = document.createElement('span');
        star.className = "fa fa-star";

        if (i <= review.score) star.classList.add("checked");

        stars.append(star);
    }

    top.append(topContent, stars);

    const message = document.createElement("div");
    message.classList.add("message");
    const messageContent = document.createElement('p');
    messageContent.textContent = `"${review.message}"`;

    message.appendChild(messageContent);

    container.append(top, message);
    wrapper.append(container);
}


window.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.reviews-wrapper');

    const reviews = getMultipleRandomReviews(allReviews, 3);

    reviews.forEach(review => createReviewCard(wrapper, review))


    const element = 
        `<div class="review" id="review-1">
        <div class="top">
            <p><span class="keyword">"Reliable"</span> <span class="role manager">~ Former manager</span></p>
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>

        </div>
        <div class="message">
            <p>"Basile has consistently been a great help to our team. Whenever we needed someone to take the
                initiative or help out on a certain task, he would be there to help! I could always count on
                him."</p>
        </div>
    </div>`
})