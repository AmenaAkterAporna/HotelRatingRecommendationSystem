/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author Acer
 */
public class HotelRatingFuncTest {
    
    public HotelRatingFuncTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }

    /**
     * Test of loginCheck method, of class HotelRatingFunc.
     */
    @Test
    public void testLoginCheck() {
        System.out.println("loginCheck");
        String id = "test";
        String pass = "test";
        HotelRatingFunc instance = new HotelRatingFunc();
        String expResult = "pass";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);
        
    }
    
    @Test
    public void testLoginCheck2() {
        System.out.println("loginCheck2");
        String id = "aporna";
        String pass = "123456";
        HotelRatingFunc instance = new HotelRatingFunc();
        String expResult = "pass";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);
        
    }
    
    @Test
    public void testLoginCheck3() {
        System.out.println("loginCheck3");
        String id = "test";
        String pass = "1111";
        HotelRatingFunc instance = new HotelRatingFunc();
        String expResult = "fail";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);
        
    }
    
    
     @Test
    public void testLoginCheck4() {
        System.out.println("loginCheck");
        String id = "";
        String pass = "";
        HotelRatingFunc instance = new HotelRatingFunc();
        String expResult = "fail";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);
        
    }
    
    

    /**
     * Test of ratedIndexCheck method, of class HotelRatingFunc.
     */
    @Test
    public void testRatedIndexCheck() {
        System.out.println("ratedIndexCheck");
        int star = 4;
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 5;
        int result = instance.ratedIndexCheck(star);
        assertEquals(expResult, result);

    }
    
    @Test
    public void testRatedIndexCheck2() {
        System.out.println("ratedIndexCheck");
        int star = 3;
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 4;
        int result = instance.ratedIndexCheck(star);
        assertEquals(expResult, result);

    }
    
    @Test
    public void testRatedIndexCheck3() {
        System.out.println("ratedIndexCheck");
        int star = 1;
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 2;
        int result = instance.ratedIndexCheck(star);
        assertEquals(expResult, result);

    }

    /**
     * Test of getAverageRatingTest method, of class HotelRatingFunc.
     */
    @Test
    public void testGetAverageRatingTest() {
        System.out.println("getAverageRatingTest");
        int[] x = {4,3,2,1,5}; // sum=4+3+2+1+5=15|| expResult=15/5=3
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 3;
        int result = instance.getAverageRatingTest(x);
        assertEquals(expResult, result);
    }
    
    @Test
    public void testGetAverageRatingTest2() {
        System.out.println("getAverageRatingTest");
        int[] x = {2,4,5,2,4,1};
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 3;
        int result = instance.getAverageRatingTest(x);
        assertEquals(expResult, result);
    }
    
    @Test
    public void testGetAverageRatingTest3() {
        System.out.println("getAverageRatingTest");
        int[] x = {5,5,5,5,5,5,5};
        HotelRatingFunc instance = new HotelRatingFunc();
        int expResult = 5;
        int result = instance.getAverageRatingTest(x);
        assertEquals(expResult, result);
    }
    
}
