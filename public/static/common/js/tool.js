/**
 *
 * 接受页面传递参数
 * @param name
 * @returns {string}
 */
function getQueryString(name) {
    var result = window.location.search.match(new RegExp("[\?\&]" + name
        + "=([^\&]+)", "i"));
    if (result == null || result.length < 1) {
        return "";
    }
    return result[1];
}