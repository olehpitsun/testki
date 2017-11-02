package main;

import org.junit.Test;

import static org.junit.Assert.*;

/**
 * Created by Oleh on 02.11.2017.
 */
public class UserTest {
    @Test
    public void getName() throws Exception {

        User user = new User("Oleh");
        assertEquals("Oleh", user.getName());
    }

    @Test
    public void testHappy() throws Exception {
        User user = new User("Oleh");
        assertFalse(user.isHappy());

    }
}