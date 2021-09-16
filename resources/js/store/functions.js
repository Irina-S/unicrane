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
    const spanKeysArray = Obkect.keys(spanList);
    //  Если пролет меньше минмального из прайс листа

    //  Если пролетбольше максимального из прайслиста
    let from, to, price;
    //Если попадает в прайс лист
    spanKeysArray.forEach((val, index) => {
        if (craneSpan == val) {
            price = spanList[val];
        } else {
            //последний индекс!!!
            nextVal = spanKeysArray[index + 1];
            if (val < craneSpan && craneSpan < nextVal) {
                from = val;
                to = nextVal;
            }
        }
    });

    if (price !== undefined)
        return price;

    const spanDiff = to - from;
    const priceDiff = spanList[to] - spanList[from];
    const pricePerMeter = priceDiff / spanDiff;

    const craneSpanDiff = craneSpan - from;

    const cranePriceDiff = craneSpanDiff * pricePerMeter;

    price = spanList[from] + cranePriceDiff;

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