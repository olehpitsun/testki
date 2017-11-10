package patterns.chain;

/**
 * Created by Oleh on 10.11.2017.
 */
public class SimpleReportNotifier extends Notifier {

    public SimpleReportNotifier(int priority) {
        super(priority);
    }

    @Override
    public void write(String message) {
        System.out.println("Просто повідомлення " + message);
    }
}
