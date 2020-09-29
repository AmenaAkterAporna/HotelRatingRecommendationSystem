
public class HotelRatingFunc {
    private static String uid[] = {"aporna", "abcd", "emon", "test", "amlan"};
    
    private static String pass[] = {"123456", "abcd", "5555", "test", "nibu123"};
    

    public String loginCheck(String id, String pass) {
        HotelRatingFunc H = new HotelRatingFunc();
        String uid=id;
        String upass=pass;
        String message="fail";
        for (int i = 0; i < H.uid.length ; i++) {
            if(H.uid[i].equals(uid)) {
                if (H.pass[i].equals(upass)){
                    message = "pass";
                }else {
                message = "fail";
                }
            }
        }
        return message;
    }

    public int ratedIndexCheck(int star) {
        return star+1;
    }

    public int getAverageRatingTest(int [] x) {
        int sum=0;
        for (int i = 0; i < x.length ; i++) {
        sum+=x[i];
    }
        return sum/x.length;
    }
}
