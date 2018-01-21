public class Solution {
    public String replaceSpace(StringBuffer str) {
        if(str == null){
            return null;
        }
        StringBuilder newStr = new StringBuilder();   //可变字符
        //遍历字符串查找
        for(int i=0;i<str.length();i++){
            if(str.charAt(i)==' '){
                newStr.append('%');
                newStr.append('2');
                newStr.append('0');
            }else{
                newStr.append(str.charAt(i));
            }
        }
        return newStr.toString();
    }
}