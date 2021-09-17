/**Вычисляет базовую стоимость крана по прайс листу
 * 
 * @param {*} priceList объект - прайс для ручных или электро кранов 
 * @param {*} craneType тип крана - опорный или подвесной
 * @param {*} lCapacity грузоподъемность
 * @param {*} craneSpan пролет крана - ширина путей
 * @returns стоимость крана по прайс листу
 */
export function calcBasePrice(priceList, craneType, lCapacity, craneSpan) {
    const spanList = priceList[craneType][lCapacity];
    const spanKeysArray = Object.keys(spanList);

    console.log(spanList);
    console.log(spanKeysArray);

    const minSpan = Math.min(...spanKeysArray);
    const maxSpan = Math.max(...spanKeysArray);

    console.log(`пролет ${craneSpan}`);
    console.log(`минимальнй пролет ${minSpan}`);


    //  Если пролет меньше минмального из прайс листа
    if (craneSpan < minSpan) {
        console.log('меньше');
        return spanList[minSpan];
    }
    // Если пролет больше максимального из прайслиста
    if (craneSpan > maxSpan) {
        console.log('больше');
        return false;
    }
    // Если пролет равен значению пролетов в прайсе
    console.log(spanList[craneSpan]);
    console.log(spanKeysArray);
    console.log(spanKeysArray.includes(craneSpan));
    if (spanKeysArray.includes(craneSpan.toString())) {
        console.log('есть в прайсе');
        console.log(`${spanList[craneSpan]}`);
        return spanList[craneSpan];
    }
    //Иначе рассчитваем разницу
    let from, to, price;
    //Если попадает в прайс лист
    spanKeysArray.forEach((val, index) => {
        //последний индекс!!!
        let nextVal = spanKeysArray[index + 1];
        if (val < craneSpan && craneSpan < nextVal) {
            from = val;
            to = nextVal;
            console.log(`между ${from} - ${to}`);
        }
    });

    if (price !== undefined)
        return price;

    const spanDiff = to - from;
    const priceDiff = spanList[to] - spanList[from];
    const pricePerMeter = priceDiff / spanDiff;

    const craneSpanDiff = craneSpan - from;

    const cranePriceDiff = craneSpanDiff * pricePerMeter;

    console.log(`разница с мин пролетом ${spanDiff}`);
    console.log(`разница цены между пролетами ${priceDiff}`);
    console.log(`цена за метр ${pricePerMeter}`);

    price = spanList[from] + Math.round(cranePriceDiff);

    return price;

}
/**
 * 
 * @param {*} mmValue значение в мм
 * @returns значение в метрах
 */
export function mmToMeters(mmValue) {
    return mmValue / 1000;
}